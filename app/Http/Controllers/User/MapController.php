<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\ResponseTrait;
use App\Models\BookedSession;
use App\Models\Classes;
use App\Models\ContactUs;
use App\Models\Customer;
use App\Models\Session as ModelsSession;
use App\Models\WorkoutLocation;
use Carbon\Carbon;
use DateTime;
use Stripe;
use Throwable;
use DB;
use Illuminate\Support\Facades\View;
use Stevebauman\Location\Facades\Location;

class MapController extends Controller
{
    use ResponseTrait;

    public function mapViewPage(Request $request)
    {
        $ip = $request->ip(); /* Dynamic IP address */
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        $categories = Category::all();
        $countries = WorkoutLocation::groupBy('country')->pluck('country')->toArray();
        return view('pages.userdashboard.explore.map-view', compact('currentUserInfo', 'categories', 'countries'));
    }

    public function filterMapData(Request $request)
    {
        $workoutType = $request->type;
        $workoutCategory = $request->category;
        $workoutLocationCountry = $request->country;
        $workoutLocationState = $request->state;
        $workoutPrice = $request->price;
        $workoutRadius = $request->radius;
        $sessionType = $request->session_type;
        $sessionDay = $request->day;
        $whereCategory = [];
        $whereLocation = [];
        $wherePrice = [];
        if ($workoutType != null) {
            $whereCategory['type'] = $workoutType;
        }
        if ($workoutCategory != null) {
            $whereCategory['category_id'] = $workoutCategory;
        }
        if ($workoutLocationCountry != null) {
            $whereLocation['country'] =  $workoutLocationCountry;
        }
        if ($workoutLocationState != null) {
            $whereLocation['area'] =  $workoutLocationState;
        }
        if ($workoutPrice != null) {
            if ($workoutPrice == 85) {
                $wherePrice = [85, 200];
            } elseif ($workoutPrice == 200) {
                $wherePrice = [200, 400];
            } elseif ($workoutPrice == 400) {
                $wherePrice = [400, 800];
            } elseif ($workoutPrice == 800) {
                $wherePrice = [800, 100000];
            }
        }
        if ($sessionType != null) {
            $whereCategory['session_type'] =  $sessionType;
        }
        if ($sessionDay != null) {
            $whereCategory['day'] =  $sessionDay;
        }
        if (empty($wherePrice)) {
            $sessions = ModelsSession::where($whereCategory)->whereHas('location', function($q) use($whereLocation){
                if (!empty($whereLocation)) {
                    $q->where($whereLocation);
                }
            })->with(['trainerData','category'])->get();
        } else {
            $sessions = ModelsSession::where($whereCategory)->whereHas('location', function($q) use($whereLocation){
                if (!empty($whereLocation)) {
                    $q->where($whereLocation);
                }
            })->whereBetween('price', $wherePrice)->with(['trainerData','category'])->get();
        }
        $latLng = [];
        $countSessions = 0;
        // $ip = '162.159.24.227';
        // Map Radius Integration 
        $ip = $request->ip(); /* Static IP address */
        $currentUserInfo = Location::get($ip);
        $latitude = $currentUserInfo->latitude;
        $longitude = $currentUserInfo->longitude;
        function getDistance($lat1, $lon1, $lat2, $lon2)
        {
            $R = 6371; // Radius of the earth in km
            $dLat = deg2rad($lat2 - $lat1);
            $dLon = deg2rad($lon2 - $lon1);
            $a = sin($dLat / 2) * sin($dLat / 2) +
                cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                sin($dLon / 2) * sin($dLon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
            $d = $R * $c; // Distance in km
            return $d;
        }

        function deg2rad($deg)
        {
            return $deg * (M_PI / 180);
        }
        if (count($sessions) > 0) {
            foreach ($sessions as $session) {
                // dd($session['trainerData']);
                if (!empty($session['trainerData'])) {
                    $countSessions++;
                    $distance = getDistance($latitude, $longitude, $session['trainerData']['latitude'], $session['trainerData']['longitude']);
                    array_push($latLng, ['22.3185673', '114.1796057', $session]);

                    // if (!empty($workoutRadius)) {
                    //     if (
                    //         $distance <= $workoutRadius
                    //     ) {
                    //         array_push($latLng, [$session['trainerData']['latitude'], $session['trainerData']['longitude'], $session]);
                    //     }
                    // } else {
                    // }
                }
            }
        }
        if ($countSessions < 1 || empty($latLng)) {
            return $this->sendError('No Session is available for the applied filter.');
        }
        $success = [];
        $success['sessions'] = $sessions;
        $success['latLngArray'] = $latLng;
        return $this->sendResponse($success, 'Search Completed, Found Following Sessions.');
    }



    
    public function getStatesByCountry(Request $request)
    {
       $states = WorkoutLocation::where('country', $request->country)->groupBy('area')->pluck('area')->toArray();
       $html = '<option value="">Select Country First</option>';
       
       if(!empty($states)){
        $html = '';
        foreach($states as $state){
            $html.= '<option value="'.$state.'">'.$state.'</option>';
        }
       }
    //    dd($html);
        return $this->sendResponse([
            'html' => $html
        ], 'States');
    }
}

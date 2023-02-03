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
        // $ip = $request->ip(); /* Dynamic IP address */
        $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        $categories = Category::all();
        return view('pages.userdashboard.explore.map-view', compact('currentUserInfo', 'categories'));
    }

    public function filterMapData(Request $request)
    {
        $workoutType = $request->type;
        $workoutCategory = $request->category;
        $workoutLocation = $request->location;
        $workoutPrice = $request->price;
        $workoutRadius = $request->radius;
        $whereCategory = [];
        if ($workoutType != null) {
            $whereCategory['type'] = $workoutType;
        }
        if ($workoutCategory != null) {
            $whereCategory['category_id'] = $workoutCategory;
        }
        if ($workoutLocation != null) {
            $whereCategory['location'] =  $workoutLocation;
        }
        if ($workoutPrice != null) {
            $whereCategory['price'] =  $workoutPrice;
        }
        if ($workoutRadius != null) {
            $whereCategory['radius'] =  $workoutRadius;
        }
        $sessions = ModelsSession::where($whereCategory)->with('trainerData', 'category')->get();
        $latLng = [];
        if (count($sessions) > 0) {
            foreach ($sessions as $session) {
                array_push($latLng, [$session['trainerData']['latitude'], $session['trainerData']['longitude'], $session]);
            }
        } else {
            return $this->sendError('No Session is available for the applied filter.');
        }
        $success = [];
        $success['sessions'] = $sessions;
        $success['latLngArray'] = $latLng;
        return $this->sendResponse($success, 'Search Completed, Found Following Sessions.');
    }
}

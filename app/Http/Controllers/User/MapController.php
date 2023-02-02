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
            array_push($whereCategory, ['type' => $workoutType]);
        }
        if ($workoutCategory != null) {
            array_push($whereCategory, ['category' => $workoutCategory]);
        }
        if ($workoutLocation != null) {
            array_push($whereCategory, ['location' => $workoutLocation]);
        }
        if ($workoutPrice != null) {
            array_push($whereCategory, ['price' => $workoutPrice]);
        }
        if ($workoutRadius != null) {
            array_push($whereCategory, ['radius' => $workoutRadius]);
        }
        $booksession = BookedSession::where('user_id', auth()->user()->id)->with(['session.class.trainer', 'session.class.category' => function ($query) use ($whereCategory) {
            if (!empty($whereCategory)) {
                $query->where($whereCategory);
            }
        }, 'session.class.classImage'])->get();
        if (!$booksession) {
            return $this->sendError('Session Detail');
        }
        $booksession_detail = json_decode($booksession, true);

        $sessionView = View::make('pages.userdashboard.dashboard.booked-session-list', [
            'booksession_detail' =>         $booksession_detail,
        ])->render();
        return [
            'sessionView' => $sessionView,
            'session' => $booksession_detail
        ];
    }
}

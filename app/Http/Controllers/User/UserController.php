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
use DateTime;
use Stripe;
use Throwable;

class UserController extends Controller
{
    use ResponseTrait;
    ///////// category Trainer Api...../////////
    public function getTrainerCategory(Request $request)
    {

        if ($request->has('id')) {
            $trainer_category = Category::where('id', $request->id)->with('trainerCategory.trainer')->first();
        } else {
            $trainer_category = Category::with('trainerCategory.trainer')->get();
        }

        if (!$trainer_category) {
            return $this->sendError('Category');
        }
        $responseBody = $trainer_category;
        $userdata = json_decode($responseBody, true);
        // dd($userdata);
        return view('pages.website.all-trainers-web', compact('userdata'));
    }
    /////.........spacific.........//////
    public function getSpecificTrainer(Request $request, $id)
    {
        if ($id) {
            $trainer_category = Category::where('id', $id)->with('trainerCategory.trainer')->first();
        } else {
            $trainer_category = Category::with('trainerCategory.trainer')->get();
        }

        if (!$trainer_category) {
            return $this->sendError('Category');
        }
        $responseBody = $trainer_category;
        $userdata = json_decode($responseBody, true);

        return view('pages.website.specific-trainers-web', compact('userdata'));
    }

    ///....update profile.....////
    public function updateProfile(Request $request)
    {
        if ($request->has('files')) {
            try {
                $file = $request->file('files');
                $name = time() . $file->getClientOriginalName();
                $file->move(public_path('/files'), $name);
                $fileNames = $name;
            } catch (Exception $e) {
                $message = $e->getMessage();
                return $this->failure($message);
            }
            $image = url('public/files') . '/' .  $fileNames;
            // return $this->sendResponse($image, 'URL');
        }
        $data = request()->except(['_token']);
        if ($request->has('files')) {
            unset($data['files']);
            $data['profile_img'] = $image;
        }
        $update = User::findOrFail($request->user_id);
        $updateUser = $update->fill($data)->save();
        if (!$updateUser) {
            Session::flash('error', 'Something went wrong, please try again later.');
            return redirect()->back();
        }
        flash()->success('Profile Updated Successfuly!');
        return view('pages.website.update-profile');
    }

    ///   stripe payment .....///////
    public function paymentIntent(Request $request)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


        $month = date('m', strtotime($request->valid_through));
        $year = date('Y', strtotime($request->valid_through));


        $response = \Stripe\Token::create(array(
            "card" => array(
                "number"    => $request->input('card_number'),
                "exp_month" => $month,
                "exp_year"  => $year,
                "cvc"       => $request->input('cvc'),
                "name"      => $request->input('name')
            )
        ));

        $card_token = $response->id;
        $userId = auth()->user()->id;


        $customer = $stripe->customers->create([
            'description' => 'Customer create successfully',
            'source' => $card_token
        ]);

        $ephemeralKey = \Stripe\EphemeralKey::create(
            ['customer' => $customer->id],
            ['stripe_version' => '2020-08-27']
        );



        Customer::create([
            "card_name"      => $request->input('name'),
            "card_number"    => $request->input('card_number'),
            'customer_id' => $customer->id,
            'user_id' => $userId,
            'type' => 'CREDIT CARD',
            'valid_thru' => $month . '/' . $year
        ]);

        $pay_int_res = [
            'result' => 'Success',
            'message' => 'Customer create successfully',
            'stripe_publish_key' => env('STRIPE_KEY'),
            // 'payment_intent' => $paymentIntent->client_secret,
            'ephemeral_key' => $ephemeralKey->secret,
            'customer_id' => $customer->id
        ];


        // return $this->sendResponse($pay_int_res, 'Payment Intent');
        return view('pages.website.payment');
    }
    /////......contact........////
    public function contactUs(ContactUsRequest $request)
    {
        $contact_us = new ContactUs();
        $contact_us->name = $request->full_name;
        $contact_us->email = $request->email;
        $contact_us->phone = $request->phone_number;
        $contact_us->message = $request->message;
        if (!$contact_us) {
            return $this->sendError('Contact');
        }
        $contact_us->save();
        return redirect()->back();
    }

    /////.....get all trainer........./////
    public function dashbord()
    {
        $all_trainer = User::where('user_type', '=', 'trainer')->get();
        // Classes::with('session', 'category')->get();
        $class_detail = Classes::with(['category', 'session', 'trainer'])->get();

        $all_category = Category::get();
        if (!$all_trainer) {
            return $this->sendError('Dashboard');
        }
        $trainers = json_decode($all_trainer, true);
        $class = json_decode($class_detail, true);
        // dd($class);
        $category = json_decode($all_category, true);
        return view('pages.userdashboard.explore.dashboard', compact('trainers', 'category', 'class'));
    }
    /////....user side trainer detail......../////
    public function trainer_detail(Request $request, $id)
    {
        $trainer = User::where('id', '=', $id)->with(['class.category', 'class.session'])->get();
        if (!$trainer) {
            return $this->sendError('Trainer Detail');
        }
        $trainer_detail = json_decode($trainer, true);
        // dd($trainer_detail);
        return view('pages.userdashboard.explore.trainer-detail', compact('trainer_detail'));
    }

    public function class_detail(Request $request, $id)
    {

        $class = Classes::where('id', '=', $id)->with('session', 'category')->get();
        if (!$class) {
            return $this->sendError('Session Detail');
        }
        $class_detail = json_decode($class, true);

        return view('pages.userdashboard.explore.class-detail', compact('class_detail'));
    }
    //////customer card detail........./////////

    public function showCard($id)
    {

        $card = Customer::where('user_id', auth()->user()->id)->get();
        $session = ModelsSession::where('id', $id)->first();

        if (!$card) {
            return $this->sendError('Session Detail');
        }
        $card_detail = json_decode($card, true);
        // dd($card_detail);
        return view('pages.userdashboard.explore.payment', compact('card_detail', 'session'));
    }

    /////// card payment......///////
    public function cardPayment(Request $request)
    {
        $customerId = $request->customer;
        // dd($customerId);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        // $customer = 'cus_N4Sy4juVCKLQl4';

        try {
            // dd(1);
            $payment = \Stripe\Charge::create(array(
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "customer" => $customerId
            ));

            if ($payment['status'] = "succeeded") {
                $status = true;
            } else {
                $status = false;
            }

            $booksession = BookedSession::create(array(
                'session_id' => $request->session_id,
                'user_id' => auth()->user()->id,
                'customer_id' => $request->customer_id,
                'is_completed' => $status,
            ));
        } catch (Throwable $e) {

            return $this->sendError(false, $e);
        }
        return redirect()->route('/dashboard');

        // return $this->sendResponse([], 'Payment successfully Done!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class PaymentController extends Controller
{
    //
    public function saveTokenData(Request $request)
    {
        $customer = Customer::create($request->except('_token'));
        if ($customer) {
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}

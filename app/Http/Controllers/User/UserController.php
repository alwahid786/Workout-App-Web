<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        return view('pages.website.all-trainers-web', compact('trainer_category'));
    }
}

<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function showTrainerDetail()
    {
        $trainer = User::where('id', auth()->user()->id)->with('trainer_profile', 'session.category')->first();
        if (!$trainer) {
            return $this->sendError('No Data found against ID');
        }
        $trainer  = json_decode($trainer, true);
        // dd($trainer);


        return view('pages.trainerSide.account-step-five', compact('trainer'));
    }
}

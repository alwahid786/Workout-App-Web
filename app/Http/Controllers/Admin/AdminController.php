<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;
use App\Models\TrainerProfile;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    use ResponseTrait;
    public function addCategory(AddCategoryRequest $request)
    {
        $data = [
            'title' => $request->title,
            'discription' => $request->discription,
            'image' => $request->image
        ];

        $category = Category::updateOrCreate(
            [
                'id' => $request->category_id
            ],
            $data
        );
        if (!$category) {
            return $this->sendError('Category');
        }
        return $this->sendResponse(
            [
                'Category' => $category,
            ],
            'Category'
        );
    }

    //////////........admin accept /reject request Api//////////////
    public function trainerStaus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'trainer_id' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
    
            return $this->sendError(implode(",", $validator->errors()->all()));
        }
        $permission = TrainerProfile::where('user_id', $request->trainer_id)->update(['status' => $request->status]);
        if (!$permission) {
            return $this->sendError('No Data found against ID');
        }
        return $this->sendResponse([], 'Trainer status updated');
    }
}

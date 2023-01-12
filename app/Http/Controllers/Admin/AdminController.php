<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

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
}

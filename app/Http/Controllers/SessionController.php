<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SessionController extends Controller
{
    public function renderSessions(Request $request)
    {
        $images = $request->file('myfile');
        $paths = [];

        foreach ($images as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = public_path('uploads/');
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $image->move($path, $filename);
            $paths[] = public_path('uploads/' . $filename);
        }

        $data = $request->except('myfile');
        $data['images'] = $paths;
        $viewRender = view('pages.trainerSide.session-slots-render')->with('data', $data)->render();
        return response()->json(array('success' => true, 'html' => $viewRender, 'data' => $data));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules
            //'image' => 'dimensions:max_width=1000,max_height=500,ratio=2/1',

        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->storeAs('/public/images/postPictures', $imageName); // Store the image in the storage/app/public/images directory
            // You can also store it in other directories as per your requirement
            //return 'moin';

        }

        return $imageName;
    }
}



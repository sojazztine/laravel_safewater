<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('image.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Define the folder path inside 'public/images/img'
        $imagePath = 'images/img';

        // Ensure the folder exists
        if (!file_exists(public_path($imagePath))) {
            mkdir(public_path($imagePath), 0777, true);
        }

        // Store the image in the 'public/images/img' folder
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path($imagePath), $imageName);

        // Save the relative path in the database
        Image::create(['image' => 'img/'.$imageName]);

        return redirect()->back()->with('success', 'Image Uploaded Successfully');
    }
}

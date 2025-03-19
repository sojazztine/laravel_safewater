<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('public.post_blog');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'blog_title' =>  'required|max:255',
            'blog_description' => 'required|max:255',
            'blog_image' => 'required|max:255',
            'blog_publish' => 'required|max:255',
        ]);

        Blog::create([
            'title' => $validateData['blog_title'],
            'description' => $validateData['blog_description'],
            'image' => $validateData['blog_image'],
            'author' => $validateData['blog_publish'],

        ]);

        return redirect()->route('public.post_blog')->with('success', 'Blog post successfully!');

    }
}

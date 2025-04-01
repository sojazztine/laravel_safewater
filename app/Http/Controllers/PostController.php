<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    //show all post
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index',['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){


        // dd('Request Data:', $request->all());


        $validated  = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'publisher' => ['required'],
            'content' => ['required']
        ]);
        // $imagePath = 'images/post';

        // if(!file_exists(public_path($imagePath))){
        //     mkdir(public_path($imagePath), 0777, true);
        // }

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path($imagePath), $imageName);
        // $validated['image'] = $imageName;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('post', 'public');
            $validated['image'] = $path;
        } else {
            unset($validated['image']);
        }


        Post::create($validated);
        return redirect(route('posts.index'))->with('success', 'Post created successfully!');
    }

    public function show(string $id){
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }


    public function edit(string $id){
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        // Validate request
        $validated = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'publisher' => ['required'],
            'content' => ['required']
        ]);

        // Fetch the post to update
        $post = Post::findOrFail($id);

        // Handle image upload if a new one is provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('post', 'public');
            $validated['image'] = $path;
        } else {
            unset($validated['image']);
        }

        // Update the post data (this includes the image if uploaded)
        $post->update($validated);

        // Redirect with success message
        return redirect(route('posts.index'))->with('success', 'Post updated successfully!');
    }


    public function delete(string $id){
        Post::where('id', $id)->delete();
        return redirect(route('posts.index'));
    }

}

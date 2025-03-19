<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'sub_title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ]);
        Post::create($validated);
        return redirect(route('posts.index'));
    }

    public function show(string $id) {
        $post = Post::findOrFail($id);

        return view('posts.show', ['post' => $post]);
    }

    public function edit(string $id) {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'sub_title' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ]);

        Post::where('id', $id)->update($validated);

        return redirect(route('posts.index'));
    }

    public function delete($id)
    {
        Post::where('id', $id)->delete();
        return redirect(route('posts.index'));
    }
}

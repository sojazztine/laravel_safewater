<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//Route for interface
Route::get('/', function () {
    return view('index');
});
Route::get('/services', function(){
    return view('public.services');
})->name('services');

Route::get('/contact', function(){
    return view('public.contactUs');
})->name('contact');
Route::get('/blog', function () {
    $posts = Post::all();  // Fetch all posts from the database
    return view('public.blog', compact('posts'));  // Pass posts to the view
})->name('blog');
Route::get('/about', function(){
    return view('public.aboutUs');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route for blog post
Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // show all post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // go to page add new post
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store'); //add a new post in db
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); //open speicific post
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); //update a post
Route::delete('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete'); //delete post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); // To fetch the data


require __DIR__.'/auth.php';

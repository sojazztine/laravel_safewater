<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\QuillContentController;

Route::get('/', function () {
    return view('index');
});
Route::get('/services', function(){
    return view('public.services');
})->name('services');

Route::get('/contact', function(){
    return view('public.contactUs');
})->name('contact');
Route::get('/blog', function(){
    return view('public.blog');
})->name('blog');
Route::get('/about', function(){
    return view('public.aboutUs');
})->name('about');

Route::get('/post_blog', [BlogController::class, 'create'])->name('post_blog');
Route::post('/post_blog',[BlogController::class, 'store'])->name('blog.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete');

require __DIR__.'/auth.php';


Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');




Route::get('/quill', [QuillContentController::class, 'index'])->name('quill.index');
Route::get('/quill/create', [QuillContentController::class, 'create'])->name('quill.create');
Route::post('/quill/store', [QuillContentController::class, 'store'])->name('quill.store');
Route::get('/quill/{id}', [QuillContentController::class, 'show'])->name('quill.show');
Route::delete('/quill/{id}', [QuillContentController::class, 'destroy'])->name('quill.destroy');

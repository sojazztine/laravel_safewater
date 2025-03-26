<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Models\Inquiry;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
//Route for interface
Route::get('/', function () {
    $testimonials = Testimonial::all();
    return view('index', ['testimonials' => $testimonials]);
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

//Route for testminoials
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonials/{id}', [TestimonialController::class, 'delete'])->name('testimonials.delete');
Route::get('/testimonials/{id}', [TestimonialController::class, 'show'])->name('testimonials.show');

//Route for contact
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
Route::post('/inquiries/store', [InquiryController::class, 'store'])->name('inquiries.store');
Route::delete('/inquiries/{id}', [InquiryController::class, 'delete'])->name('inquiries.delete');

require __DIR__.'/auth.php';

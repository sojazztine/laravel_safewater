<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Models\Inquiry;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
//Route for interface

// Route::get('/', [ApiController::class, 'index'])->name('/');

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('about', [PublicController::class, 'aboutPage'])->name('public.about-us');

Route::get('solution', [PublicController::class, 'solutionPage'])->name('public.solution');
Route::get('solution/community-collection', [PublicController::class, 'communityCollection'])->name('public.solutions.community-collection');
Route::get('solution/restore-boards', [PublicController::class, 'restoreBoards'])->name('public.solutions.restore-boards');
Route::get('solution/restore-furniture', [PublicController::class, 'restoreFurniture'])->name('public.solutions.restore-furniture');
Route::get('solution/restore-classroom', [PublicController::class, 'restoreClassroom'])->name('public.solutions.restore-classroom');

Route::get('contact', [PublicController::class, 'contactPage'])->name('public.contactUs');
Route::get('contact/faq', [PublicController::class, 'faqPage'])->name('public.contact.faq');


Route::get('blog', [PublicController::class, 'blogPage'])->name('public.blog');

Route::get('blog/{id}', [PublicController::class, 'showBlog'])->name('public.post.showBlog');

// Route::get('/about', function(){
//     return view('public.aboutUs');
// })->name('about');

Route::get('/dashboard', function () {
    $total_post = Post::count();
    $total_testimonials = Testimonial::count();
    $total_inquiries  = Inquiry::count();
    return view('dashboard', compact('total_post', 'total_testimonials', 'total_inquiries'));
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


//Landing Page for image
Route::get('/landingPage', [LandingPageController::class, 'index'])->name('landingPage.index');
Route::get('/landigPage/create', [LandingPageController::class, 'create'])->name('landingPage.create');
Route::post('/landingPage/store', [LandingPageController::class, 'store'])->name('landingPage.store');
Route::get('landingPage/{id}/edit', [LandingPageController::class, 'edit'])->name('landingPage.edit');
Route::delete('/landingPage/{id}', [LandingPageController::class, 'delete'])->name('landingPage.delete');


//Route for site settings
Route::get('/site-settings', [SiteSettingController::class, 'index'])->name('site-settings.index');

// Route::post('/site-settings/store', [SiteSettingController::class, 'store'])->name('site-settings.store');

Route::put('/site-settings/{id}/general', [SiteSettingController::class, 'updateGeneralSetting'])->name('site-settings.update');

//Route for app overview admin
Route::get('/site-settings/app-overview', [SiteSettingController::class, 'indexAppOverview'])->name('app-overview.index');
Route::put('/site-settings/{id}/app-overview', [SiteSettingController::class, 'updateAppOverview'])->name('app-overview.update');

//Route for external links admin
Route::get('/site-settings/external-links', [SiteSettingController::class, 'indexExternalLinks'])->name('external-links.index');
Route::put('/site-settings/{id}/external-links', [SiteSettingController::class, 'updateExternalLinks'])->name('external-links.update');

//Route for inquiry recipeints
Route::get('/site-settings/inquiry-recipients', [SiteSettingController::class, 'inquiryRecipients'])->name('inquiry-recipients.index');
Route::get('/site-settings/inquiry-recipients/create', [SiteSettingController::class, 'createInquiryRecipeints'])->name('inquiry-recipients.create');
Route::post('/site-settings/inquiry-recipients/store', [SiteSettingController::class, 'storeInquiryRecipients'])->name('inquiry-recipients.store');
Route::delete('/site-settings/{id}', [SiteSettingController::class, 'deleteInquiryRecipients'])->name('inquiry-recipients.delete');

//Route for user management
Route::get('user-management', [UserController::class, 'index'])->name('user-management.index');
Route::get('user-management/create', [UserController::class, 'create'])->name('user-management.create');
Route::post('user-management/store', [UserController::class, 'store'])->name('user-management.store');
require __DIR__ . '/auth.php';

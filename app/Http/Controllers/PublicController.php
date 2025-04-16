<?php

namespace App\Http\Controllers;

use App\Models\HeroHeading;
use App\Models\LandingPage;
use App\Models\Post;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    public function index() {

        $total_sachets = $this->getTotalSachetCount();
        
        $landingPages = LandingPage::select('image')->get();
        $siteSettings = SiteSetting::select('logo', 'app_title', 'app_subtitle', 'web_login_link', 'web_register_link')->first();
        $logo = $siteSettings?->logo;
        $web_login_link = $siteSettings?->web_login_link;
        $web_register_link = $siteSettings?->web_register_link;
        $web_login_link =  str_replace("http://safewater.test/", "", $web_login_link);
        $web_register_link = str_replace("http://safewater.test/", "", $web_register_link);
        $app_title = $siteSettings?->app_title;
        $app_subtitle = $siteSettings?->app_subtitle;
        $latestTestimonialImages = Testimonial::select('image')->limit(3)->latest()->get();

        $testimonials = Testimonial::select('name', 'company', 'content', 'image')->latest()->get();

        return view('public.index', [
            'landingPages' => $landingPages,
            'latestTestimonialsImage' => $latestTestimonialImages,
            'testimonials' => $testimonials,
            'total_sachets' => $total_sachets,
            'logo' => $logo,
            'app_title'=> $app_title,
            'app_subtitle' => $app_subtitle,
            'web_login_link' => $web_login_link,
            'web_register_link' => $web_register_link

        ]);
    }

    public function aboutPage()
    {
        return view('public.about-us');
    }
    public function solutionPage(){
        return view('public.solution');
    }
    public function communityCollection(){
        return view('public.solutions.community-collection');
    }
    public function restoreBoards(){
        return view('public.solutions.restore-boards');
    }
    public function restoreFurniture(){
        return view('public.solutions.restore-furniture');
    }
    public function restoreClassroom(){
        return view('public.solutions.restore-classroom');
    }

    public function contactPage(){
        return view('public.contactUs');
    }
    public function faqPage(){
        return view('public.contact.faq');
    }

    public function blogPage(){
        $posts = Post::latest()->paginate(6);
        return view('public.posts.index', compact('posts'));
    }

    public function showBlog(string $id){
        $posts = Post::latest()->paginate(3);
        $post = Post::findOrFail($id);
        return view('public.posts.show', ['post' => $post, 'posts' => $posts]);
    }

    private function getTotalSachetCount() {
        $total_sachets = 0;

        $data = [];

        try {
            $url = env('DATA_API_URL');
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->get($url);
            $data = $response->json();
        } catch (Exception $e) {
            $data = [];
        }

        if( count($data) ) {
            $total_sachets = $data['data']['total_sachets'];
        }

        return $total_sachets;
    }
}

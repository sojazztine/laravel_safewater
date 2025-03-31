<?php

namespace App\Http\Controllers;

use App\Models\HeroHeading;
use App\Models\LandingPage;
use App\Models\Post;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function index() {
        $total_sachets = $this->getTotalSachetCount();
        $hero_heading_title = HeroHeading::value('title');
        $hero_heading_description = HeroHeading::value('description');
        $landingPages = LandingPage::select('image')->get();

        $latestTestimonialImages = Testimonial::select('image')->limit(3)->latest()->get();

        $testimonials = Testimonial::select('name', 'company', 'content', 'image')->latest()->get();

        return view('public.index', [
            'landingPages' => $landingPages,
            'latestTestimonialsImage' => $latestTestimonialImages,
            'testimonials' => $testimonials,
            'hero_heading_title' => $hero_heading_title,
            'hero_heading_description' =>  $hero_heading_description,
            'total_sachets' => $total_sachets
        ]);
    }

    public function aboutPage()
    {
        return view('public.about-us');
    }
    public function solutionPage(){
        return view('public.solution');
    }

    public function contactPage(){
        return view('public.contactUs');
    }

    public function blogPage(){
        $posts = Post::all();
        return view('public.posts.index', compact('posts'));
    }

    public function showBlog(string $id){
        $post = Post::findOrFail($id);
        return view('public.posts.show', ['post' => $post]);
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

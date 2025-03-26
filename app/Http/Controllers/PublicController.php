<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function index() {
        $total_sachets = $this->getTotalSachetCount();

        $landingPages = LandingPage::select('image')->get();

        $latestTestimonialImages = Testimonial::select('image')->limit(3)->latest()->get();

        $testimonials = Testimonial::select('name', 'company', 'content', 'image')->latest()->get();

        return view('public.index', [
            'landingPages' => $landingPages,
            'latestTestimonialsImage' => $latestTestimonialImages,
            'testimonials' => $testimonials,
            'total_sachets' => $total_sachets
        ]);
    }

    public function aboutPage()
    {
        return view('public.about-us');
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

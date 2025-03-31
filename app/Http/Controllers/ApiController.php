<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Testimonial;
use App\Models\LandingPage;

class ApiController extends Controller
{
    public function index()
    {
        $url = "https://ecobin-staging.posmworks.com/api/general-datas";

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get($url);

        $data = $response->json();

        // Fetch other necessary data
        $testimonials = Testimonial::all();
        $landingPages = LandingPage::all();

        return view('index', [
            'testimonials' => $testimonials,
            'landingPages' => $landingPages,
            'apiData' => $data
        ]);
    }
}



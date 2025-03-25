<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function showApiData()
    {
        // API URL
        $url = "https://ecobin-staging.posmworks.com/api/general-datas";

        // Make the API request
        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get($url);

        // Decode the JSON response
        $data = $response->json();

        // Pass data to the view
        return view('api_view', compact('data'));
    }
}

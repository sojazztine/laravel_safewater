<?php

namespace App\Http\Controllers;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $landingPages = LandingPage::orderBy('id', 'desc')->get();
        return view('landingPage.index', ['landingPages' => $landingPages]);
    }

    public function create(){
        return view('landingPage.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => ['required'],
            'image' => ['required'],
            'description' => ['required']
        ]);

        $path = $request->file('image')->store('landingPage', 'public');
        $validated['image']= $path;

        LandingPage::create($validated);
        return redirect(route('landingPage.index'))->with('success', 'Image updated');

    }

    public function delete(string $id){
        LandingPage::where('id', $id)->delete();
        return view('landingPage.index');
    }
}

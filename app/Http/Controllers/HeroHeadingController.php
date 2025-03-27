<?php

namespace App\Http\Controllers;

use App\Models\HeroHeading;
use Illuminate\Http\Request;

class HeroHeadingController extends Controller
{
    public function index(){
        $hero_headings = HeroHeading::latest()->get();
        return view('heroHeading.index', ['hero_headings' => $hero_headings]);
    }

    public function edit(string $id){
        $hero_heading = HeroHeading::findOrFail($id);
        return view('heroHeading.edit', ['hero_heading' => $hero_heading]);
    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);
        $hero_heading = HeroHeading::findOrFail($id);

        $hero_heading->update($validated);
        return redirect(route('heroHeading.index'))->with('success', 'Hero Heading Updated');
    }
}

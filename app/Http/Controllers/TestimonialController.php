<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::get();
        return view('testimonials.index', ['testimonials' => $testimonials]);
    }

    public function create(){
        return view('testimonials.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'content' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
        $imagePath = 'images/testimonial';

        $path = $request->file('image')->store('testimonial', 'public');
        $validated['image']= $path;
        // if(!file_exists(public_path($imagePath))){
        //     mkdir(public_path($imagePath), 0777, true);
        // }

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path($imagePath), $imageName);
        // $validated['image'] = $imageName;

        Testimonial::create($validated);
        return redirect(route('testimonials.index'))->with('success', 'Testimonial Added');
    }

    public function edit(string $id){
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.edit', ['testimonials' => $testimonial]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => ['required'],
            'company' => ['required'],
            'content' => ['required'],
            'image' => ['nullable','image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $testimonial = Testimonial::findOrFail($id);

        if($request->hasFile('image')){
            $imagePath = 'images/testimonial';
            if(!file_exists(public_path($imagePath))){
                mkdir(public_path($imagePath), 0777, true);
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path($imagePath), $imageName);
            $validated['image'] = $imageName;
        }


        $testimonial->update($validated);
        return redirect(route('testimonials.index'))->with('success', 'Testimonial Updated');
    }

    public function delete(string $id){
        Testimonial::where('id', $id)->delete();
        return redirect(route('testimonials.index'))->with('delete', 'Testimonial Deleted');
    }

    public function show(string $id){
        $testimonial = Testimonial::findOrFail($id);
        return view('testimonials.show', ['testimonials' => $testimonial]);
    }
}

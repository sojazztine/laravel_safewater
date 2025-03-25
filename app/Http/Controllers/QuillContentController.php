<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuillContent;

class QuillContentController extends Controller
{
    public function index()
    {
        $contents = QuillContent::all();
        return view('quill.index', compact('contents'));
    }

    public function create()
    {
        return view('quill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        QuillContent::create([
            'content' => $request->content
        ]);

        return redirect()->route('quill.index')->with('success', 'Content saved successfully.');
    }

    public function show($id)
    {
        $content = QuillContent::findOrFail($id);
        return view('quill.show', compact('content'));
    }

    public function destroy($id)
    {
        $content = QuillContent::findOrFail($id);
        $content->delete();
    
        return redirect()->route('quill.index')->with('success', 'Content deleted successfully!');
    }
    
}

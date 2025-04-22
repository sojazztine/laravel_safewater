<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::select('id', 'company_name', 'image', 'description')->latest()->get();
        return view('partner-management.index', compact('partners'));
    }

    public function create()
    {
        return view('partner-management.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => ['required'],
            'image' => ['required', 'image'],
            'description' => ['required']
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('partners', 'public');
            $validated['image'] = $path;
        } else {
            unset($validated['image']);
        }
        Partner::create($validated);
        return redirect(route('partner-management.index'))->with('success', 'successfully added');
    }

    public function edit(string $id)
    {
        $data = Partner::findOrFail($id);
        return view('partner-management.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Partner::findOrFail($id);
        $validated = $request->validate([
            'company_name' => ['required'],
            'image' => ['required', 'image'],
            'description' => ['required']
        ]);


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('partners', 'public');
            $validated['image'] = $path;
        } else {
            unset($validated['image']);
        }
        $data->update($validated);
        return redirect(route('partner-management.index'))->with('success', 'successfully updated');
    }

    public function delete(string $id)
    {
        $data = Partner::where('id', $id)->delete();
        return redirect(route('partner-management.index', compact('data')))->with('success', 'succssfully deleted');
    }
}

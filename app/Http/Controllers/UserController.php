<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email')->get();
        return view('user-management.index', compact('users'));
    }

    public function create()
    {
        return view('user-management.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::create($validated);
        return redirect(route('user-management.index'))->with('success', 'user add successfully');
    }

    public function delete(string $id)
    {
        User::where('id', $id)->delete();
        return redirect(route('user-management.index'))->with('success', 'deleted succssfully');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('user-management.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required',],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user->update($validated);
        return redirect(route('user-management.index'))->with('success', 'user add successfully');
    }
}

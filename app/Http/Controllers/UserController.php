<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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
}

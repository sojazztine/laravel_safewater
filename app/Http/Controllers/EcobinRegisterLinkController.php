<?php

namespace App\Http\Controllers;

use App\Models\ecobinLoginLink;
use Illuminate\Http\Request;

class EcobinRegisterLinkController extends Controller
{
    public function index(){
        $ecobinRegisterLinks = ecobinLoginLink::get();
        return view('ecobinLinks.register.index', ['ecobinRegisterLinks' => $ecobinRegisterLinks]);
    }

    public function edit(string $id){
        $ecobinRegisterLinks = ecobinLoginLink::findOrFail($id);
        return view('ecobinLinks.register.edit', ['ecobinRegisterLinks' => $ecobinRegisterLinks]);
    }

    public function update(Request $request,$id){
        $validated = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);
        $ecobinRegisterLinks = ecobinLoginLink::findOrFail($id);

        $ecobinRegisterLinks->update($validated);
        return redirect(route('ecobinRegisterLink.index'))->with('success', 'Ecobin Register Link Updated');

    }
}

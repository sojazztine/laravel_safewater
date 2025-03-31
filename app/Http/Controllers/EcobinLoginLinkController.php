<?php

namespace App\Http\Controllers;

use App\Models\ecobinLoginLink;
use Illuminate\Http\Request;

class EcobinLoginLinkController extends Controller
{
    public function index(){
        $ecobinLoginLinks = ecobinLoginLink::get();
        return view('ecobinLinks.login.index', ['ecobinLoginLinks' => $ecobinLoginLinks]);
    }

    public function edit(string $id){
        $ecobinLoginLinks = ecobinLoginLink::findOrFail($id);
        return view('ecobinLinks.login.edit', ['ecobinLoginLinks' => $ecobinLoginLinks]);
    }

    public function update(Request $request,$id){
        $validated = $request->validate([
            'title' => ['required'],
            'description' => ['required']
        ]);
        $ecobinLoginLinks = ecobinLoginLink::findOrFail($id);

        $ecobinLoginLinks->update($validated);
        return redirect(route('ecobinLoginLink.index'))->with('success', 'Ecobin Login Link Updated');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index(){
        $siteSettings = SiteSetting::first();

        $site_setting_id = $siteSettings->id;
        $logo = $siteSettings->logo;
        $app_title = $siteSettings->app_title;
        $app_subtitle = $siteSettings->app_subtitle;
        $app_description = $siteSettings->app_description;

        return view('site-settings.index', compact(['site_setting_id', 'logo', 'app_title', 'app_subtitle', 'app_description']));
    }

    public function updateGeneralSetting(Request $request, $id) {

        $siteSettings = SiteSetting::findOrFail($id);
        $validated = $request->validate([
            'app_title' => ['required'],
            'app_subtitle' => ['required'],
            'app_description' =>['required']
        ]);
        $siteSettings->update($validated);
        return redirect(route('site-settings.index'))->with('success', 'Settings saved successfully!');;
    }

}

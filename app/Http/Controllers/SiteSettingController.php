<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'app_title' => ['nullable'],
            'app_subtitle' => ['nullable'],
            'app_description' => ['nullable']
        ]);


        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('landingPage', 'public');
            $validated['logo'] = $path;
        } else {
            unset($validated['logo']);
        }

        $siteSettings->update($validated);
        return redirect(route('site-settings.index'))->with('success', 'Settings saved successfully!');;
    }

    public function indexAppOverview(){
        $site_settings = SiteSetting::first();

        $site_setting_id = $site_settings->id;
        $site_app_version = $site_settings->app_version;
        $site_key_words = $site_settings->app_keywords;

        return view('site-settings.app-overview', compact('site_setting_id', 'site_app_version', 'site_key_words'));


    }

    public function updateAppOverview(Request $request, $id){
        $site_settings = SiteSetting::findOrFail($id);
        $validated = $request->validate([
            'app_keywords' => ['required'],
            'app_version' => ['required']
        ]);
        $site_settings->update($validated);
        return redirect(route('app-overview.index'))->with('success', 'App settings update successfully!');
    }

    public function indexExternalLinks(){
        $site_settings = SiteSetting::first();

        $site_setting_id = $site_settings->id;
        $site_web_login_link = $site_settings->web_login_link;
        $site_web_register_link = $site_settings->web_register_link;

        return view('site-settings.external-links', compact('site_setting_id','site_web_login_link', 'site_web_register_link'));
    }

    public function updateExternalLinks(Request $request, $id){
        $site_setting = SiteSetting::findOrFail($id);

        $validated = $request->validate([
            'web_login_link' => ['required'],
            'web_register_link' => ['required']
        ]);
        $site_setting->update($validated);
        return redirect(route('external-links.index'))->with('success', 'External Links updated successfully!');
    }

    public function inquiryRecipients(){
        // $recipients = SiteSetting::select('id','inquiry_recipients')->latest()->get();
        $data = SiteSetting::first();
        $recipients = array_map('trim', explode(',', $data->inquiry_recipients));
       
        return view('site-settings.inquiry-recipient.inquiry-recipients', compact('recipients'));
    }

    public function createInquiryRecipeints(){
        return view('site-settings.inquiry-recipient.inquiry-recipients-create');
    }

    public function storeInquiryRecipients(Request $request)
    {
        $validated = $request->validate([
            'inquiry_recipients' => ['nullable', 'email']     
        ]);

        $data = SiteSetting::first();

        $existingRecipients = explode(',', $data->inquiry_recipients);

        $existingRecipients = array_filter(array_map(function ($email) {
            $email = trim($email, " \t\n\r\0\x0B\"[]"); 
            return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : null;
        }, $existingRecipients));

        $newEmail = trim($validated['inquiry_recipients'], " \t\n\r\0\x0B\"[]");

        if (filter_var($newEmail, FILTER_VALIDATE_EMAIL) && !in_array($newEmail, $existingRecipients)) {
            $existingRecipients[] = $newEmail;
        }

        $data->inquiry_recipients = implode(',', $existingRecipients);
        $data->save();

        return redirect(route('inquiry-recipients.index'))->with('success', 'Successfully added!');
    }

    public function deleteInquiryRecipients(string $email){
        $data = SiteSetting::first();
        $recipients = array_map('trim', explode(',', $data->inquiry_recipients));
        $result = array_diff($recipients, [$email]);
        $recipients = implode(',', $result);
        $data->inquiry_recipients = $recipients;
        $data->save();

        return redirect(route('inquiry-recipients.index'))->with('success', 'Deleted Successfully!');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use App\Models\SiteSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.navbar', function ($view) {
            $siteSettings = SiteSetting::select('logo')->first();

            $logoPath = $siteSettings && $siteSettings->logo
                ? Storage::url($siteSettings->logo) // Correct URL generation
                : asset('restore-logo.png'); // Fallback image

            $view->with('logo', $logoPath);
        });
    }
}

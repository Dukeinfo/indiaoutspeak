<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        app()->booted(function () {
            // Your function here
            $this->clearAllLang();
        });
    }

    public function clearAllLang()
    {
        session()->forget('language');
        session()->put('language', 'punjabi');
    }
}

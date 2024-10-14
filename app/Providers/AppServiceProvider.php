<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/** 
 * Register Customize CustomSearchDbEngine from App\Custom\CustomSearchDbEngine.php
 * https://stackoverflow.com/questions/78316714/search-for-multiple-words-in-laravel-scout
*/
use App\Custom\CustomSearchDbEngine;
use Laravel\Scout\EngineManager;

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
        // "custom_db_search" will be the name of driver put in the .env
        app(EngineManager::class)->extend("custom_db_search", function() {
            return new CustomSearchDbEngine;
        });
    }
}

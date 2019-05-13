<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Vsch\TranslationManager\ManagerServiceProvider;
use Vsch\TranslationManager\TranslationServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTranslationsManager();
    }

    private function registerTranslationsManager()
    {
        $this->app->register(
          TranslationServiceProvider::class
        );
        $this->app->register(
          ManagerServiceProvider::class
        );
        $this->loadMigrationsFrom(
          base_path('vendor/vsch/laravel-translation-manager/database/migrations')
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

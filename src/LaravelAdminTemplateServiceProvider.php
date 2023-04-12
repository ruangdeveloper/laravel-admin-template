<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Illuminate\Support\ServiceProvider;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\SBAdminTwoService;

class LaravelAdminTemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lat');
        $this->mergeConfigFrom(__DIR__ . '/../config/lat.php', 'lat');
        $this->app->singleton(SBAdminTwoService::class, function () {
            return new SBAdminTwoService();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../assets/sb-admin-two' => $this->app->basePath('public/vendor/ruangdeveloper/laravel-admin-template/sb-admin-two')
            ], 'lat:assets:sb-admin-two');
        }
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Support\ServiceProvider;
use RuangDeveloper\LaravelAdminTemplate\Middlewares\Callback;

class LaravelAdminTemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lat');
        $this->mergeConfigFrom(__DIR__ . '/../config/lat.php', 'lat');
        $this->app->bind(LaravelAdminTemplateService::class);
    }

    public function boot(HttpKernel $kernel)
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../assets/sb-admin-two' => $this->app->basePath('public/vendor/ruangdeveloper/laravel-admin-template/sb-admin-two')
            ], 'lat:assets:sb-admin-two');
        }

        /** @var Illuminate\Http\Kernel */
        $kernel = $kernel;
        $kernel->pushMiddleware(Callback::class);
    }
}

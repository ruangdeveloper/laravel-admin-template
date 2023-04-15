<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Illuminate\Support\Facades\Facade;

class LaravelAdminTemplate extends Facade
{
    public static function getFacadeAccessor()
    {
        return LaravelAdminTemplateService::class;
    }
}

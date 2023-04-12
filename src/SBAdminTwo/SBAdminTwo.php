<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo;

use Illuminate\Support\Facades\Facade;

class SBAdminTwo extends Facade
{
    public static function getFacadeAccessor()
    {
        return SBAdminTwoService::class;
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Illuminate\Container\Container;

class TemplateComponent
{
    protected $request;

    protected function __construct()
    {
        $this->request = Container::getInstance()->make('request');
    }
}

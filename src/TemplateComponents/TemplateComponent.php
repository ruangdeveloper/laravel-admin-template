<?php

namespace RuangDeveloper\LaravelAdminTemplate\TemplateComponents;

use Illuminate\Container\Container;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasId;

class TemplateComponent
{
    use HasId;

    protected $request;

    protected function __construct()
    {
        $this->request = Container::getInstance()->make('request');
    }

    protected function isArrayOf($type, array $array)
    {
        return array_sum(array_map(function ($item) use ($type) {
            return $item instanceof $type;
        }, $array)) === sizeof($array);
    }

    public static function make()
    {
        return new self;
    }
}

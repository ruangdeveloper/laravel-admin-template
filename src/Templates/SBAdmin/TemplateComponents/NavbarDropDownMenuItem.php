<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasVisible;

class NavbarDropDownMenuItem extends TemplateComponent
{
    use HasType, HasText, HasHref, HasTarget, HasVisible;

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public static function makeLink()
    {
        return self::make()->setType('link');
    }

    public static function makeDivider()
    {
        return self::make()->setType('divider');
    }
}

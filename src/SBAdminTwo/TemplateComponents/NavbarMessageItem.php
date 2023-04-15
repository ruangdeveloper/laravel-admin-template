<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarMessageItem extends TemplateComponent
{
    use HasText, HasHref, HasTarget, HasTitle;

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }
}

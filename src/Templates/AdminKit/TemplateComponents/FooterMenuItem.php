<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class FooterMenuItem extends TemplateComponent
{
    use HasText, HasHref, HasTarget;
    
    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }
}
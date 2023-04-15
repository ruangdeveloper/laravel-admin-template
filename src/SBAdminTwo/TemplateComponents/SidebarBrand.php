<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class SidebarBrand extends TemplateComponent
{
    use HasText, HasHref, HasTarget, HasIcon;
    
    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }
}

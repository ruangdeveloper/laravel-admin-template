<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasImage;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTime;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarMessageItem extends TemplateComponent
{
    use HasTitle, HasText, HasTime, HasHref, HasTarget, HasImage;

    protected function __construct()
    {
        parent::__construct();
        $this->setTime(time());
    }

    public static function make()
    {
        return new self;
    }
}

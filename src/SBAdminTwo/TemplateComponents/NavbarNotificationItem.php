<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTime;

class NavbarNotificationItem extends TemplateComponent
{
    use HasText, HasHref, HasIcon, HasTarget, HasTime;

    protected function __construct()
    {
        parent::__construct();
        $this->time = time();
    }

    public static function make()
    {
        return new self;
    }
}

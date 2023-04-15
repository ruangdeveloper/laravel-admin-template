<?php

namespace RuangDeveloper\LaravelAdminTemplate\AdminKit\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTime;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarNotificationItem extends TemplateComponent
{
    use HasTitle, HasText, HasIcon, HasHref, HasTarget, HasTime;

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

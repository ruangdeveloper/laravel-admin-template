<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\SidebarItem;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasActive;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;

class SidebarItemLink extends SidebarItem
{
    use HasType, HasHref, HasIcon, HasText, HasTarget, HasActive;

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return (new self)->setType('sidebar-item-link');
    }
}

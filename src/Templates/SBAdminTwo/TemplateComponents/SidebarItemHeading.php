<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;

class SidebarItemHeading extends SidebarItem
{
    use HasType, HasText;

    public static function make()
    {
        return (new self)->setType('sidebar-item-heading');
    }
}

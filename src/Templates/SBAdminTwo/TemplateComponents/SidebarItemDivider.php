<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;

class SidebarItemDivider extends SidebarItem
{
    use HasType;

    public static function make()
    {
        return (new self)->setType('sidebar-item-divider');
    }
}

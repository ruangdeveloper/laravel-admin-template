<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\SidebarItemLink;

class SidebarItem extends TemplateComponent
{
    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return SidebarItemLink::make();
    }

    public static function makeLink()
    {
        return SidebarItemLink::make();
    }

    public static function makeDivider()
    {
        return SidebarItemDivider::make();
    }

    public static function makeHeading()
    {
        return SidebarItemHeading::make();
    }

    public static function makeCollapsibleLink()
    {
        return SidebarItemCollapsibleLink::make();
    }
}

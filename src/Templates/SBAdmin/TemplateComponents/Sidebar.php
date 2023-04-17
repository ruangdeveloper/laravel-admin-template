<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\Supports\Icon;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class Sidebar extends TemplateComponent
{
    use HasText, HasIcon;

    protected ?SidebarMenu $sidebarMenu = null;

    protected function __construct()
    {
        parent::__construct();
        $this->setIcon(Icon::fontAwesome('fa-bars', 'fas'));
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setSidebarMenu(?SidebarMenu $sidebarMenu = null)
    {
        $this->sidebarMenu = $sidebarMenu;

        return $this;
    }

    public function getSidebarMenu()
    {
        return $this->sidebarMenu;
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class SidebarMenu extends TemplateComponent
{
    use HasText;

    protected array $sidebarMenuItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setSidebarMenuItems(array $sidebarMenuItems = [])
    {
        if (!$this->isArrayOf(SidebarMenuItem::class, $sidebarMenuItems)) {
            throw new Exception('Sidebar menu items may only contains an instance of ' . SidebarMenuItem::class);
        }

        $this->sidebarMenuItems = $sidebarMenuItems;

        return $this;
    }

    public function getSidebarMenuItems()
    {
        return $this->sidebarMenuItems;
    }
}

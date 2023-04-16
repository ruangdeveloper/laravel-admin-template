<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents\SidebarItem;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class Sidebar extends TemplateComponent
{
    use HasTitle, HasHref, HasTarget;

    protected array $sidebarItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setSidebarItems(array $sidebarItems = [])
    {
        if (!$this->isArrayOf(SidebarItem::class, $sidebarItems)) {
            throw new Exception('Sidebar items may only contains an instance of ' . SidebarItem::class);
        }

        $this->sidebarItems = $sidebarItems;

        return $this;
    }

    public function getSidebarItems()
    {
        return $this->sidebarItems;
    }
}

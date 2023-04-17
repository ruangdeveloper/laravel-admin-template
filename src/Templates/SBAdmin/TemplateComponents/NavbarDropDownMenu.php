<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;

class NavbarDropDownMenu extends TemplateComponent
{
    use HasIcon;

    protected array $navbarDropDownMenuItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarDropDownMenuItems(array $navbarDropDownMenuItems = [])
    {
        if (!$this->isArrayOf(NavbarDropDownMenuItem::class, $navbarDropDownMenuItems)) {
            throw new Exception('Navbar dropdown menu items may only contains an instance of ' . NavbarDropDownMenuItem::class);
        }

        $this->navbarDropDownMenuItems = $navbarDropDownMenuItems;

        return $this;
    }

    public function getNavbarDropDownMenuItems()
    {
        return $this->navbarDropDownMenuItems;
    }
}

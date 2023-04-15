<?php

namespace RuangDeveloper\LaravelAdminTemplate\AdminKit\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\Supports\Icon;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarMessage extends TemplateComponent
{
    use HasTitle, HasText, HasHref, HasTarget, HasIcon;

    protected array $navbarMessageItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setIcon(Icon::feather('message-square'));
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarMessageItems(array $navbarMessageItem = [])
    {
        if (!$this->isArrayOf(NavbarMessageItem::class, $navbarMessageItem)) {
            throw new Exception('Navbar message items may only contains an instance of ' . NavbarMessageItem::class);
        }

        $this->navbarMessageItems = $navbarMessageItem;

        return $this;
    }

    public function getNavbarMessageItems()
    {
        return $this->navbarMessageItems;
    }
}

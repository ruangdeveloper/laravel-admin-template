<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\Supports\Icon;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarNotification extends TemplateComponent
{
    use HasIcon, HasTitle, HasText, HasHref, HasTarget;

    protected array $navbarNotificationItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setIcon(Icon::feather('bell'));
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarNotificationItems(array $navbarNotificationItems = [])
    {
        if (!$this->isArrayOf(NavbarNotificationItem::class, $navbarNotificationItems)) {
            throw new Exception('Navbar notification items may only contains an instance of ' . NavbarNotificationItem::class);
        }

        $this->navbarNotificationItems = $navbarNotificationItems;

        return $this;
    }

    public function getNavbarNotificationItems()
    {
        return $this->navbarNotificationItems;
    }

    public function getNavbarNotificationCount()
    {
        return sizeof($this->navbarNotificationItems);
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use Exception;
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
        $this->setTitle('Message Center');
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarMessageItems(array $navbarMessageItems = [])
    {
        if (!$this->isArrayOf(NavbarMessageItem::class, $navbarMessageItems)) {
            throw new Exception('Message items may only contains an instance of ' . NavbarMessageItem::class);
        }

        $this->navbarMessageItems = $navbarMessageItems;

        return $this;
    }

    public function getNavbarMessageItems()
    {
        return $this->navbarMessageItems;
    }

    public function getNavbarMessageCount()
    {
        return sizeof($this->getNavbarMessageItems());
    }
}

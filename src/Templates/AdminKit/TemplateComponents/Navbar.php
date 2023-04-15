<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;

class Navbar extends TemplateComponent
{
    protected ?NavbarDropDownMenu $navbarDropDownMenu = null;
    protected ?NavbarNotification $navbarNotification = null;
    protected ?NavbarMessage $navbarMessage = null;

    protected function __construct()
    {
        parent::__construct();
        $this->setNavbarDropDownMenu(NavbarDropDownMenu::make());
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarDropDownMenu(?NavbarDropDownMenu $navbarDropDownMenu = null)
    {
        $this->navbarDropDownMenu = $navbarDropDownMenu;

        return $this;
    }

    public function getNavbarDropDownMenu()
    {
        return $this->navbarDropDownMenu;
    }

    public function setNavbarNotification(?NavbarNotification $navbarNotification = null)
    {
        $this->navbarNotification = $navbarNotification;

        return $this;
    }

    public function getNavbarNotification()
    {
        return $this->navbarNotification;
    }

    public function setNavbarMessage(?NavbarMessage $navbarMessage = null)
    {
        $this->navbarMessage = $navbarMessage;

        return $this;
    }

    public function getNavbarMessage()
    {
        return $this->navbarMessage;
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class Navbar extends TemplateComponent
{
    use HasTitle, HasHref, HasTarget;

    protected ?NavbarUserInfo $navbarUserInfo = null;
    protected ?NavbarNotification $navbarNotification = null;
    protected ?NavbarMessage $navbarMessage = null;

    protected function __construct()
    {
        parent::__construct();
        $this->setTitle('Navbar Title');
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarUserInfo(?NavbarUserInfo $navbarUserInfo = null)
    {
        $this->navbarUserInfo = $navbarUserInfo;

        return $this;
    }

    public function getNavbarUserInfo()
    {
        return $this->navbarUserInfo;
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

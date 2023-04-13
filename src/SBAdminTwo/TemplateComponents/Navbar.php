<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasBrand;

class Navbar extends TemplateComponent
{
    use HasBrand;

    protected ?NavbarUserInfo $navbarUserInfo = null;
    protected ?NavbarNotificationCenter $navbarNotificationCenter = null;
    protected ?NavbarMessageCenter $navbarMessageCenter = null;

    protected function __construct()
    {
        parent::__construct();
        $this->setId();
        $this->setBrandText(null);
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

    public function setNavbarNotificationCenter(?NavbarNotificationCenter $navbarNotificationCenter = null)
    {
        $this->navbarNotificationCenter = $navbarNotificationCenter;

        return $this;
    }

    public function getNavbarNotificationCenter()
    {
        return $this->navbarNotificationCenter;
    }

    public function setNavbarMessageCenter(?NavbarMessageCenter $navbarMessageCenter = null)
    {
        $this->navbarMessageCenter = $navbarMessageCenter;

        return $this;
    }

    public function getNavbarMessageCenter()
    {
        return $this->navbarMessageCenter;
    }
}

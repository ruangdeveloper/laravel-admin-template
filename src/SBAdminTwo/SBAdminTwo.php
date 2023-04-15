<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo;

use RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplateService;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Footer;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Navbar;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Sidebar;

class SBAdminTwo
{
    protected LaravelAdminTemplateService $laravelAdminTemplateService;
    protected ?Navbar $navbar = null;
    protected ?Sidebar $sidebar = null;
    protected ?Footer $footer = null;

    public function __construct(LaravelAdminTemplateService $laravelAdminTemplateService)
    {
        $this->laravelAdminTemplateService = $laravelAdminTemplateService;
        $this->navbar = Navbar::make();
        $this->sidebar = Sidebar::make();
        $this->footer = Footer::make();
    }

    public function setNavbar(Navbar $navbar)
    {
        $this->navbar = $navbar;

        return $this;
    }

    public function getNavbar()
    {
        return $this->navbar;
    }

    public function setSidebar(Sidebar $sidebar)
    {
        $this->sidebar = $sidebar;

        return $this;
    }

    public function getSidebar()
    {
        return $this->sidebar;
    }

    public function setFooter(Footer $footer)
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFooter()
    {
        return $this->footer;
    }
}

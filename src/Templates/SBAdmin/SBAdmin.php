<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin;

use RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplateService;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents\Footer;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents\Navbar;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents\Sidebar;

class SBAdmin
{
    protected LaravelAdminTemplateService $laravelAdminTemplateService;
    protected ?Navbar $navbar = null;
    protected ?Sidebar $sidebar = null;
    protected ?Footer $footer = null;

    public function __construct(LaravelAdminTemplateService $laravelAdminTemplateService)
    {
        $this->laravelAdminTemplateService = $laravelAdminTemplateService;
        $this->setNavbar(Navbar::make());
        $this->setSidebar(Sidebar::make());
        $this->setFooter(Footer::make());
    }

    public function setNavbar(?Navbar $navbar)
    {
        $this->navbar = $navbar;

        return $this;
    }

    public function getNavbar()
    {
        return $this->navbar;
    }

    public function setSidebar(?Sidebar $sidebar = null)
    {
        $this->sidebar = $sidebar;

        return $this;
    }

    public function getSidebar()
    {
        return $this->sidebar;
    }

    public function setFooter(?Footer $footer)
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFooter()
    {
        return $this->footer;
    }
}

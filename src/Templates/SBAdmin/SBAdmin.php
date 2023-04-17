<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin;

use RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplateService;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents\Footer;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents\Navbar;

class SBAdmin
{
    protected LaravelAdminTemplateService $laravelAdminTemplateService;
    protected ?Navbar $navbar = null;
    protected ?Footer $footer = null;

    public function __construct(LaravelAdminTemplateService $laravelAdminTemplateService)
    {
        $this->laravelAdminTemplateService = $laravelAdminTemplateService;
        $this->setFooter(Footer::make());
        $this->setNavbar(Navbar::make());
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

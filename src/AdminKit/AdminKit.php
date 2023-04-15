<?php

namespace RuangDeveloper\LaravelAdminTemplate\AdminKit;

use RuangDeveloper\LaravelAdminTemplate\AdminKit\TemplateComponents\Navbar;
use RuangDeveloper\LaravelAdminTemplate\LaravelAdminTemplateService;

class AdminKit
{
    protected LaravelAdminTemplateService $laravelAdminTemplateService;
    protected ?Navbar $navbar = null;

    public function __construct(LaravelAdminTemplateService $laravelAdminTemplateService)
    {
        $this->laravelAdminTemplateService = $laravelAdminTemplateService;
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
}

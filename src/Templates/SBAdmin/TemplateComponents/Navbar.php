<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class Navbar extends TemplateComponent
{
    use HasTitle, HasHref, HasTarget;

    protected ?NavbarForm $navbarForm = null;
    protected ?NavbarDropDownMenu $navbarDropDownMenu = null;

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setNavbarForm(?NavbarForm $navbarForm = null)
    {
        $this->navbarForm = $navbarForm;

        return $this;
    }

    public function getNavbarForm()
    {
        return $this->navbarForm;
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
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo;

use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Footer;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Navbar;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Sidebar;

class SBAdminTwoService
{
    protected bool $loadBotstrapIcon = false;
    protected bool $loadFontAwesomeIcon = false;
    protected ?Navbar $navbar = null;
    protected ?Sidebar $sidebar = null;
    protected ?Footer $footer = null;

    public function loadBootstrapIcon($load = null)
    {
        if (is_null($load)) {
            return $this->loadBotstrapIcon;
        }
        $this->loadBotstrapIcon = $load;

        return $this;
    }

    public function loadFontAwesomeIcon($load = null)
    {
        if (is_null($load)) {
            return $this->loadFontAwesomeIcon;
        }
        $this->loadFontAwesomeIcon = $load;

        return $this;
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

<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo;

use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Footer;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\Sidebar;

class SBAdminTwoService
{
    protected Sidebar $sidebar;
    protected Footer $footer;

    public function __construct()
    {
        $this->sidebar = Sidebar::make();
        $this->footer = Footer::make();
    }

    public function setSidebar(Sidebar $sidebar)
    {
        $this->sidebar = $sidebar;

        return $this;
    }

    public function getSidebar(): Sidebar
    {
        return $this->sidebar;
    }

    public function setFooter(Footer $footer)
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFooter(): Footer
    {
        return $this->footer;
    }
}

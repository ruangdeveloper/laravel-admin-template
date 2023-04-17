<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class Footer extends TemplateComponent
{
    use HasText;

    protected ?FooterMenu $footerMenu = null;

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setFooterMenu(?FooterMenu $footerMenu = null)
    {
        $this->footerMenu = $footerMenu;

        return $this;
    }

    public function getFooterMenu()
    {
        return $this->footerMenu;
    }
}

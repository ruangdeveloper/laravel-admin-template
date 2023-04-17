<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;

class FooterMenu extends TemplateComponent
{
    protected array $footerMenuItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setFooterMenuItems(array $footerMenuItems = [])
    {
        if (!$this->isArrayOf(FooterMenuItem::class, $footerMenuItems)) {
            throw new Exception('Footer menu items may only contains an instance of ' . FooterMenuItem::class);
        }

        $this->footerMenuItems = $footerMenuItems;

        return $this;
    }

    public function getFooterMenuItems()
    {
        return $this->footerMenuItems;
    }
}

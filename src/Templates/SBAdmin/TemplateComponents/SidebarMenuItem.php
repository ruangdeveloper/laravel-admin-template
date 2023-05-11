<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasActive;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasVisible;

class SidebarMenuItem extends TemplateComponent
{
    use HasType, HasText, HasIcon, HasHref, HasTarget, HasActive, HasVisible;

    protected array $child = [];

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public static function makeHeading()
    {
        return self::make()->setType('heading');
    }

    public static function makeLink()
    {
        return self::make()->setType('link');
    }

    public function setChild(array $child = [])
    {
        if (!$this->isArrayOf(self::class, $child)) {
            throw new Exception('Child may only contains an instance of ' . self::class);
        }

        $this->child = $child;

        return $this;
    }

    public function getChild()
    {
        return $this->child;
    }
}

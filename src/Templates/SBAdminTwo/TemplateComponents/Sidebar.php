<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use Closure;
use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;

class Sidebar extends TemplateComponent
{
    const COLOR_GRAY = 'custom-grey';
    const COLOR_BLUE = 'custom-blue';
    const COLOR_RED = 'custom-red';

    protected $color = self::COLOR_GRAY;
    protected $sidebarItems = [];
    protected $brand;

    protected function __construct()
    {
        parent::__construct();
        $this->brand = SidebarBrand::make()->setIcon('SB')->setText('ADMIN');
    }

    public static function make()
    {
        return new self;
    }

    public function setColor(Closure|string $color)
    {
        $this->color = $color;

        return $this;
    }

    public function getColor()
    {
        if (is_string($this->color)) return $this->color;

        if ($this->color instanceof Closure) {
            return call_user_func($this->color, $this->request);
        }
    }

    public function setBrand(SidebarBrand $brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setSidebarItems(array $items = [])
    {
        if (!$this->isArrayOf(SidebarItem::class, $items)) {
            throw new Exception('Sidebar items may only contains an instance of ' . SidebarItem::class);
        }

        $this->sidebarItems = $items;

        return $this;
    }

    public function getSidebarItems()
    {
        return $this->sidebarItems;
    }
}

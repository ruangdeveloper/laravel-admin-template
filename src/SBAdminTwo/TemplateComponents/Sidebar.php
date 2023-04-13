<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Closure;
use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasBrand;

class Sidebar extends TemplateComponent
{
    const COLOR_GRAY = 'dark';
    const COLOR_BLUE = 'primary';
    const COLOR_RED = 'danger';

    use HasBrand;

    protected $color = self::COLOR_GRAY;
    protected $sidebarItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setId();
        $this->setBrandIcon('SB');
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

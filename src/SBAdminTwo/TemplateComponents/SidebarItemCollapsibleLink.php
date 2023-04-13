<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\SidebarItem;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents\CollapsibleLinkItem;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasActive;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasType;

class SidebarItemCollapsibleLink extends SidebarItem
{
    use HasType, HasIcon, HasText, HasActive;

    protected array $linkItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return (new self)->setType('sidebar-item-collapsible-link');
    }

    public function setLinkItems(array $linkItems = [])
    {
        if (!$this->isArrayOf(CollapsibleLinkItem::class, $linkItems)) {
            throw new Exception('Link items may only contains an instance of ' . CollapsibleLinkItem::class);
        }

        $this->linkItems = $linkItems;

        return $this;
    }

    public function getLinkItems()
    {
        return $this->linkItems;
    }
}

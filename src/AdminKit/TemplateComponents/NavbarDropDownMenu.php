<?php

namespace RuangDeveloper\LaravelAdminTemplate\AdminKit\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\Supports\Icon;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasImage;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class NavbarDropDownMenu extends TemplateComponent
{
    use HasText, HasImage, HasIcon;

    protected array $dropDownMenuItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setIcon(Icon::feather('settings', 'align-middle'));
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setDropDownMenuItems(array $dropDownMenuItems = [])
    {
        if (!$this->isArrayOf(NavbarDropDownMenuItem::class, $dropDownMenuItems)) {
            throw new Exception('Dropdown menu items may only contains an instance of ' . NavbarDropDownMenuItem::class);
        }

        $this->dropDownMenuItems = $dropDownMenuItems;

        return $this;
    }

    public function getDropDownMenuItems()
    {
        return $this->dropDownMenuItems;
    }
}

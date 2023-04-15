<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use Closure;
use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;

class NavbarUserInfo extends TemplateComponent
{
    protected $name = 'User';
    protected $pictureUrl = null;
    protected $dropDownItems = [];

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setName(Closure|string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        if (is_string($this->name)) return $this->name;

        if ($this->name instanceof Closure) {
            return call_user_func($this->name, $this->request);
        }
    }

    public function setPictureUrl(Closure|string $pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;

        return $this;
    }

    public function getPictureUrl()
    {
        if (is_string($this->pictureUrl)) return $this->pictureUrl;

        if ($this->pictureUrl instanceof Closure) {
            return call_user_func($this->pictureUrl, $this->request);
        }
    }

    public function setDropDownItems(array $dropDownItems = [])
    {
        if (!$this->isArrayOf(NavbarUserInfoDropDownItem::class, $dropDownItems)) {
            throw new Exception('Dropdown items may only contains ' . NavbarUserInfoDropDownItem::class);
        }

        $this->dropDownItems = $dropDownItems;

        return $this;
    }

    public function getDropDownItems()
    {
        return $this->dropDownItems;
    }
}

<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarMessageCenter extends TemplateComponent
{
    use HasTitle, HasText, HasHref, HasTarget, HasIcon;

    protected array $messageItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setTitle('Message Center');
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setMessageItems(array $messageItems = [])
    {
        if (!$this->isArrayOf(MessageItem::class, $messageItems)) {
            throw new Exception('Message items may only contains an instance of ' . MessageItem::class);
        }

        $this->messageItems = $messageItems;

        return $this;
    }

    public function getMessageItems()
    {
        return $this->messageItems;
    }

    public function getMessageCount()
    {
        return sizeof($this->getMessageItems());
    }
}

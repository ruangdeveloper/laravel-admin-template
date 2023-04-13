<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Closure;
use Exception;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTitle;

class NavbarNotificationCenter extends TemplateComponent
{
    use HasText, HasIcon, HasHref, HasTarget, HasTitle;

    protected array $notificationItems = [];

    protected function __construct()
    {
        parent::__construct();
        $this->setTitle('Notification Center');
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setNotificationItems(array $notificationItems = [])
    {
        if (!$this->isArrayOf(NotificationItem::class, $notificationItems)) {
            throw new Exception('Notification items may only contains an instance of ' . NotificationItem::class);
        }

        $this->notificationItems = $notificationItems;

        return $this;
    }

    public function getNotificationItems()
    {
        return $this->notificationItems;
    }

    public function getNotificationCount()
    {
        return sizeof($this->getNotificationItems());
    }
}

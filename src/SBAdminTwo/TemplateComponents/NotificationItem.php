<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class NotificationItem extends TemplateComponent
{
    use HasText, HasHref, HasIcon, HasTarget;

    protected Closure|int $time;

    protected function __construct()
    {
        parent::__construct();
        $this->time = time();
    }

    public static function make()
    {
        return new self;
    }

    public function setTime(Closure|int $time)
    {
        $this->time = $time;

        return $this;
    }

    public function getTime()
    {
        if (is_int($this->time)) return $this->time;

        if ($this->time instanceof Closure) {
            return call_user_func($this->time, $this->request);
        }

        return time();
    }

    public function getTimeString()
    {
        return date('d/m/Y', $this->time);
    }
}

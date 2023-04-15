<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasHref;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasTarget;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasText;

class MessageItem extends TemplateComponent
{
    use HasText, HasHref, HasTarget;

    protected $sender = 'Sender';

    protected function __construct()
    {
        parent::__construct();
    }

    public static function make()
    {
        return new self;
    }

    public function setSender(Closure|string $sender)
    {
        return $this->sender = $sender;
    }

    public function getSender()
    {
        if (is_string($this->sender)) return $this->sender;

        if ($this->sender instanceof Closure) {
            return call_user_func($this->sender, $this->request);
        }
    }
}

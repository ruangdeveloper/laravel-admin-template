<?php

namespace RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\TemplateComponents;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponent;

class Sidebar extends TemplateComponent
{
    const COLOR_GRAY = 'dark';
    const COLOR_BLUE = 'primary';
    const COLOR_RED = 'danger';

    protected $color;

    protected function __construct()
    {
        parent::__construct();

        $this->color = self::COLOR_GRAY;
    }

    public static function make()
    {
        return new self;
    }

    public function color(Closure|string $color)
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
}

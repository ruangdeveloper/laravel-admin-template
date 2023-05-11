<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasVisible
{
    protected $visible = true;

    public function setVisible(Closure|bool $visible)
    {
        $this->visible = $visible;

        return $this;
    }

    public function getVisible()
    {
        if (is_bool($this->visible)) return $this->visible;

        if ($this->visible instanceof Closure) {
            return call_user_func($this->visible, $this->request);
        }
    }

    public function isVisible()
    {
        return $this->getVisible();
    }
}

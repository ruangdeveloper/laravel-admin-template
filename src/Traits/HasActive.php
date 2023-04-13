<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasActive
{
    protected $active = false;

    public function setActive(Closure|bool $active)
    {
        $this->active = $active;

        return $this;
    }

    public function getActive()
    {
        if (is_bool($this->active)) return $this->active;

        if ($this->active instanceof Closure) {
            return call_user_func($this->active, $this->request);
        }
    }

    public function isActive()
    {
        return $this->getActive();
    }
}

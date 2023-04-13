<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasTarget
{
    protected $target = '_parent';

    public function setTarget(Closure|string $target)
    {
        $this->target = $target;

        return $this;
    }

    public function getTarget()
    {
        if (is_string($this->target)) return $this->target;

        if ($this->target instanceof Closure) {
            return call_user_func($this->target, $this->request);
        }
    }
}

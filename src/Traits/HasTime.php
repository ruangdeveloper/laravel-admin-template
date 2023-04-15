<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasTime
{
    protected Closure|int $time;

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

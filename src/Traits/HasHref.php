<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasHref
{
    protected $href = '#';

    public function setHref(Closure|string $href)
    {
        $this->href = $href;

        return $this;
    }

    public function getHref()
    {
        if (is_string($this->href)) return $this->href;

        if ($this->href instanceof Closure) {
            return call_user_func($this->href, $this->request);
        }
    }
}

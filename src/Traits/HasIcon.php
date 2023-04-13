<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;
use Exception;

trait HasIcon
{
    protected $icon;

    protected function iconIsMandatory()
    {
        return false;
    }

    public function setIcon(Closure|string $icon = null)
    {
        if (is_null($icon) && $this->iconIsMandatory()) {
            throw new Exception('Icon is mandatory for component ' . self::class);
        }

        $this->icon = $icon;

        return $this;
    }

    public function getIcon()
    {
        if (is_null($this->icon) && $this->iconIsMandatory()) {
            throw new Exception('Icon is mandatory for component ' . self::class);
        }

        if (is_string($this->icon)) return $this->icon;

        if ($this->icon instanceof Closure) {
            return call_user_func($this->icon, $this->request);
        }
    }
}

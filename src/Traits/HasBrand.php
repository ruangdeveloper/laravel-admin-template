<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;
use Exception;

trait HasBrand
{
    protected $brandText = 'SB Admin 2';
    protected $brandHref = '#';
    protected $brandTarget = '_parent';
    protected $brandIcon;

    public function setBrandText(Closure|string $brandText = null)
    {
        $this->brandText = $brandText;

        return $this;
    }

    public function getBrandText()
    {
        if (is_string($this->brandText)) return $this->brandText;

        if ($this->brandText instanceof Closure) {
            return call_user_func($this->brandText, $this->request);
        }
    }

    public function setBrandHref(Closure|string $brandHref = null)
    {
        $this->brandHref = $brandHref;

        return $this;
    }

    public function getBrandHref()
    {
        if (is_string($this->brandHref)) return $this->brandHref;

        if ($this->brandHref instanceof Closure) {
            return call_user_func($this->brandHref, $this->request);
        }
    }

    public function setBrandTarget(Closure|string $brandTarget = null)
    {
        $this->brandTarget = $brandTarget;

        return $this;
    }

    public function getBrandTarget()
    {
        if (is_string($this->brandTarget)) return $this->brandTarget;

        if ($this->brandTarget instanceof Closure) {
            return call_user_func($this->brandTarget, $this->request);
        }
    }

    public function setBrandIcon(Closure|string $brandIcon = null)
    {
        $this->brandIcon = $brandIcon;

        return $this;
    }

    public function getBrandIcon()
    {
        if (is_string($this->brandIcon)) return $this->brandIcon;

        if ($this->brandIcon instanceof Closure) {
            return call_user_func($this->brandIcon, $this->request);
        }
    }
}

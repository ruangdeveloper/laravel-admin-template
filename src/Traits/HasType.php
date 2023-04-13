<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasType
{
    protected $type = 'default';

    public function setType(Closure|string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        if (is_string($this->type)) return $this->type;

        if ($this->type instanceof Closure) {
            return call_user_func($this->type, $this->request);
        }
    }

    public function typeIs($type)
    {
        return $this->getType() === $type;
    }
}

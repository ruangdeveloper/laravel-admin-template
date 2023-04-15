<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasTitle
{
    protected $title = 'Example Title';

    public function setTitle(Closure|string $title = null)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        if (is_string($this->title)) return $this->title;

        if ($this->title instanceof Closure) {
            return call_user_func($this->title, $this->request);
        }
    }
}

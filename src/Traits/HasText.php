<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;

trait HasText
{
    protected $text = 'Example Text';

    public function setText(Closure|string $text)
    {
        $this->text = $text;

        return $this;
    }

    public function getText()
    {
        if (is_string($this->text)) return $this->text;

        if ($this->text instanceof Closure) {
            return call_user_func($this->text, $this->request);
        }
    }
}

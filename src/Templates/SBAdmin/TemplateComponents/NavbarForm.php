<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\TemplateComponents;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;
use RuangDeveloper\LaravelAdminTemplate\Traits\HasIcon;

class NavbarForm extends TemplateComponent
{
    use HasIcon;

    protected $inputType = 'text';
    protected $inputPlaceholder = '';
    protected $inputName = 'navbar_form_input';
    protected $inputValue = '';
    protected $method = 'GET';
    protected $action = '';

    protected function __construct()
    {
        parent::__construct();
    }

    protected function iconIsMandatory()
    {
        return true;
    }

    public static function make()
    {
        return new self;
    }

    public function setInputType(Closure|string $inputType)
    {
        $this->inputType = $inputType;

        return $this;
    }

    public function getInputType()
    {
        if (is_string($this->inputType)) return $this->inputType;

        if ($this->inputType instanceof Closure) {
            return call_user_func($this->inputType, $this->request);
        }
    }

    public function setInputPlaceholder(Closure|string $inputPlaceholder)
    {
        $this->inputPlaceholder = $inputPlaceholder;

        return $this;
    }

    public function getInputPlaceholder()
    {
        if (is_string($this->inputPlaceholder)) return $this->inputPlaceholder;

        if ($this->inputPlaceholder instanceof Closure) {
            return call_user_func($this->inputPlaceholder, $this->request);
        }
    }

    public function setInputName(Closure|string $inputName)
    {
        $this->inputName = $inputName;

        return $this;
    }

    public function getInputName()
    {
        if (is_string($this->inputName)) return $this->inputName;

        if ($this->inputName instanceof Closure) {
            return call_user_func($this->inputName, $this->request);
        }
    }

    public function setInputValue(Closure|string $inputValue)
    {
        $this->inputValue = $inputValue;

        return $this;
    }

    public function getInputValue()
    {
        if (is_string($this->inputValue)) return $this->inputValue;

        if ($this->inputValue instanceof Closure) {
            return call_user_func($this->inputValue, $this->request);
        }
    }

    public function setMethod(Closure|string $method)
    {
        $this->method = $method;

        return $this;
    }

    public function getMethod()
    {
        if (is_string($this->method)) return $this->method;

        if ($this->method instanceof Closure) {
            return call_user_func($this->method, $this->request);
        }
    }

    public function setAction(Closure|string $action)
    {
        $this->action = $action;

        return $this;
    }

    public function getAction()
    {
        if (is_string($this->action)) return $this->action;

        if ($this->action instanceof Closure) {
            return call_user_func($this->action, $this->request);
        }
    }
}

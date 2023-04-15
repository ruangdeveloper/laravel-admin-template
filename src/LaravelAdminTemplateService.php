<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\SBAdminTwo;

class LaravelAdminTemplateService
{
    protected bool $loadBotstrapIcon = false;
    protected bool $loadFontAwesomeIcon = false;
    protected ?Closure $inMiddlewareFunction = null;
    protected ?SBAdminTwo $sbAdminTwo = null;

    public function loadBootstrapIcon($load = null)
    {
        if (is_null($load)) {
            return $this->loadBotstrapIcon;
        }
        $this->loadBotstrapIcon = $load;

        return $this;
    }

    public function loadFontAwesomeIcon($load = null)
    {
        if (is_null($load)) {
            return $this->loadFontAwesomeIcon;
        }
        $this->loadFontAwesomeIcon = $load;

        return $this;
    }

    public function inMiddleware(?Closure $inMiddlewareFunction = null)
    {
        $this->inMiddlewareFunction = $inMiddlewareFunction;
    }

    public function getInMiddlewareFunction()
    {
        return $this->inMiddlewareFunction;
    }

    public function sbAdminTwo()
    {
        if (is_null($this->sbAdminTwo)) {
            $this->sbAdminTwo = new SBAdminTwo($this);
        }

        return $this->sbAdminTwo;
    }
}

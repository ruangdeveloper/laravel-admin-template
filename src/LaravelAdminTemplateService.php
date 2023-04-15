<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\AdminKit\AdminKit;
use RuangDeveloper\LaravelAdminTemplate\SBAdminTwo\SBAdminTwo;

class LaravelAdminTemplateService
{
    protected ?Closure $inMiddlewareFunction = null;
    protected ?SBAdminTwo $sbAdminTwo = null;
    protected ?AdminKit $adminKit = null;

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

    public function adminKit()
    {
        if (is_null($this->adminKit)) {
            $this->adminKit = new AdminKit($this);
        }

        return $this->adminKit;
    }
}

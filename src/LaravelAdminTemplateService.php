<?php

namespace RuangDeveloper\LaravelAdminTemplate;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\Templates\AdminKit\AdminKit;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdmin\SBAdmin;
use RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\SBAdminTwo;

class LaravelAdminTemplateService
{
    protected ?Closure $inMiddlewareFunction = null;
    protected ?SBAdminTwo $sbAdminTwo = null;
    protected ?AdminKit $adminKit = null;
    protected ?SBAdmin $sbAdmin = null;

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

    public function sbAdmin()
    {
        if (is_null($this->sbAdmin)) {
            $this->sbAdmin = new SBAdmin($this);
        }

        return $this->sbAdmin;
    }
}

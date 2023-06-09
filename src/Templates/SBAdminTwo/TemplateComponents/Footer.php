<?php

namespace RuangDeveloper\LaravelAdminTemplate\Templates\SBAdminTwo\TemplateComponents;

use Closure;
use RuangDeveloper\LaravelAdminTemplate\TemplateComponents\TemplateComponent;

class Footer extends TemplateComponent
{
    protected $copyright;

    protected function __construct()
    {
        parent::__construct();

        $this->copyright = sprintf('Copyright &copy; %s. Your Website. Allrights Reserved.', date('Y'));
    }

    public static function make()
    {
        return new self;
    }

    public function setCopyright(Closure|string $copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getCopyright()
    {
        if (is_string($this->copyright)) return $this->copyright;

        if ($this->copyright instanceof Closure) {
            return call_user_func($this->copyright, $this->request);
        }
    }
}

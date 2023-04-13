<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

trait HasId
{
    protected $id;

    public function setId($id = null)
    {
        if (is_null($id)) {
            $this->id = 'component-' . uniqid();
        } else {
            $this->id = $id;
        }

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}

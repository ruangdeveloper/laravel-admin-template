<?php

namespace RuangDeveloper\LaravelAdminTemplate\Traits;

use Closure;
use Exception;

trait HasImage
{
    protected $imageUrl;

    protected function imageIsMandatory()
    {
        return false;
    }

    public function setImageUrl(Closure|string $imageUrl = null)
    {
        if (is_null($imageUrl) && $this->imageIsMandatory()) {
            throw new Exception('Image is mandatory for component ' . self::class);
        }

        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getImageUrl()
    {
        if (is_null($this->imageUrl) && $this->imageIsMandatory()) {
            throw new Exception('Image is mandatory for component ' . self::class);
        }

        if (is_string($this->imageUrl)) return $this->imageUrl;

        if ($this->imageUrl instanceof Closure) {
            return call_user_func($this->imageUrl, $this->request);
        }
    }
}

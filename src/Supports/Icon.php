<?php

namespace RuangDeveloper\LaravelAdminTemplate\Supports;

class Icon
{
    public static function fontAwesome($name, $type = 'fa', $fixWidth = true, string $classes =  '')
    {
        $fw = '';
        if ($fixWidth) {
            $fw = 'fa-fw';
        }
        return '<i class="' . $type . ' ' . $fw . ' ' . $name . ' ' . $classes . '"></i>';
    }

    public static function bootstrap($name, string $classes = '')
    {
        return '<i class="' . $name . ' ' . $classes . '"></i>';
    }

    public static function feather(string $name, string $classes = 'align-middle')
    {
        return '<i data-feather="' . $name . '" class="' . $classes . '"></i>';
    }
}

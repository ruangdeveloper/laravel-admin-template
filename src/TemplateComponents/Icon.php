<?php

namespace RuangDeveloper\LaravelAdminTemplate\TemplateComponents;

class Icon extends TemplateComponent
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
}

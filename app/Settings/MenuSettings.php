<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class MenuSettings extends Settings
{
    public string $menu_title;
    public string $menu_description;
    public string $menu_name_button;
    public string $menu_link_button;

    public static function group(): string
    {
        return 'menu';
    }
}

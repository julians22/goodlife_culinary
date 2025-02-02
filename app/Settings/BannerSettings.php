<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class BannerSettings extends Settings
{
    public array $banners = [];

    public static function group(): string
    {
        return 'banner';
    }
}

<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GallerySettings extends Settings
{
    public ?array $galleries;

    public static function group(): string
    {
        return 'gallery';
    }
}

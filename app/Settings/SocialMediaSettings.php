<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SocialMediaSettings extends Settings
{
    public string $socmed_title_1;
    public ?string $socmed_title_2;
    public string $socmed_description;
    public array $socmed_links;

    public static function group(): string
    {
        return 'socmed';
    }
}

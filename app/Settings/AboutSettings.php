<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutSettings extends Settings
{
    public string $about_title;
    public string $about_description;
    public string $about_video;
    public string $about_alt_video_thumbnail;
    public string $about_video_thumbnail;
    public array $about_provide;
    public string $about_provide_description;

    public static function group(): string
    {
        return 'about';
    }
}

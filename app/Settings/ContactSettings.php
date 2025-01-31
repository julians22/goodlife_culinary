<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public string $contact_title;
    public string $contact_description;
    public array $contact_links;

    public static function group(): string
    {
        return 'contact';
    }
}

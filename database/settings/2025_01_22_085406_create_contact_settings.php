<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.contact_title', 'Contact Us for Reservation');
        $this->migrator->add('contact.contact_description', "Planning a special occasion or just looking to reserve a table? We've made it easy for you! Contact our team via WhatsApp to book your spot. Whether it's a birthday party, a romantic dinner, or a corporate gathering, we're here to help you make it perfect.");
        $this->migrator->add('contact.contact_links', [
            [
                'icon' => '',
                'link' => 'https://wa.me'
            ],
            [
                'icon' => '',
                'link' => 'mailto:'
            ],
            [
                'icon' => '',
                'link' => 'https://food.grab.com/id/en/restaurant/good-life-culinary-kelapa-dua-delivery/6-C3A3NYNVE2LWE2'
            ]
        ]);
    }
};

<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('socmed.socmed_title_1', 'Follow Us on');
        $this->migrator->add('socmed.socmed_title_2', 'Social Media');
        $this->migrator->add('socmed.socmed_description', "Stay connected with Good Life Culinary and never miss an update! Follow us on Instagram and Tiktok for our latest promotions, event highlights, and behind-the-scenes moments. Join out community and be inspired by how we make every event unforgettable.");
        $this->migrator->add('socmed.socmed_links', [
            [
                'background' => '',
                'icon' => '',
                'link' => 'https://www.youtube.com/channel/UC2gjRqDbQnmbrN9ls2vo29A'
            ],
            [
                'background' => '',
                'icon' => '',
                'link' => 'https://www.instagram.com/goodlifeculinary.official/?hl=en'
            ],
            [
                'background' => '',
                'icon' => '',
                'link' => 'https://www.tiktok.com/@goodlifeculinaryofficial'
            ],
        ]);
    }
};

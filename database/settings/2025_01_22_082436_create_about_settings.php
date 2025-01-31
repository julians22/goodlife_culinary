<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('about.about_title', 'About Us');
        $this->migrator->add('about.about_description', "<b>Good Life Culinary</b> is Tangerang's #1 cafe and restaurant for birthdays and events, featuring a beautiful glass rooftop. Since 2019, we've been serving a mix of Western and Asian dishes at affordable prices. Perfect for celebrations like birthdays, sweet seventeens, and sangjit ceremonies.");
        $this->migrator->add('about.about_video', '');
        $this->migrator->add('about.about_video_thumbnail', '');
        $this->migrator->add('about.about_provide', [
            [
                'title' => 'Birthdays',
                'image' => ''
            ],
            [
                'title' => 'Ceremonies',
                'image' => ''
            ],
            [
                'title' => 'Gatherings',
                'image' => ''
            ],
        ]);
        $this->migrator->add('about.about_provide_description', "<b>Good Life Culinary Cafe</b> is the perfect destination for celebrating special events and creating unforgettable moments with your loved ones. We offer customizable on flexible event packages tailored to your needs, including services such as MC, sound system, karaoke, backdrop decoration, screen projector, and more. Enjoy premium service and high-quality food at an affordable price ensuring a memorable experience for you and your guests. Whether it's a birthday, anniversary, or gathering, we make every occasion truly special.");
    }
};

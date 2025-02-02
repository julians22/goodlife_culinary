<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('menu.menu_title', 'Menu Book');
        $this->migrator->add('menu.menu_description', "Explore our menu filled with mouthwatering dishes that blend the best of Western and Asian cuisines. From appetizers to desserts, we have something to satisfy every craving. Whether it's a casual meal or a grand event, our menu is designed to impress.");
        $this->migrator->add('menu.menu_name_button', 'CLICK HERE!');
        $this->migrator->add('menu.menu_link_button', 'https://bit.ly/3aKGTmI');
    }
};

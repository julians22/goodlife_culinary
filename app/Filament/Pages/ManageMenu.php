<?php

namespace App\Filament\Pages;

use App\Settings\MenuSettings;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageMenu extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    protected static ?string $title = 'Menu';

    protected ?string $subheading = 'Manage the menu section.';

    protected static ?int $navigationSort = 2;

    protected static string $settings = MenuSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('menu_title')
                            ->label('Title')
                            ->autocomplete(false)
                            ->required(),
                        TextInput::make('menu_button')
                            ->label('Button')
                            ->autocomplete(false)
                            ->required(),
                        RichEditor::make('menu_description')
                            ->label('Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'link',
                                'underline', 'redo', 'undo'
                            ])
                            ->required(),
                    ])
            ]);
    }
}

<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageContact extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-phone';

    protected static ?string $title = 'Contact';

    protected ?string $subheading = 'Manage the contact section.';

    protected static ?int $navigationSort = 4;

    protected static string $settings = ContactSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('contact_title')
                            ->label('Title')
                            ->placeholder('Contact Us')
                            ->required(),
                        RichEditor::make('contact_description')
                            ->label('Description')
                            ->required(),
                    ])
            ]);
    }
}

<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
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

    protected static ?int $navigationSort = 6;

    protected static string $settings = ContactSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('contact_title')
                            ->label('Title')
                            ->prefixIcon('heroicon-o-h3')
                            ->placeholder('e.g. Contact Us')
                            ->autocomplete(false)
                            ->required(),
                        RichEditor::make('contact_description')
                            ->label('Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'link',
                                'underline', 'redo', 'undo'
                            ])
                            ->required(),
                        Repeater::make('contact_links')
                            ->label('Contacts')
                            ->required()
                            ->schema([
                                TextInput::make('link')
                                    ->label('Link')
                                    ->prefixIcon('heroicon-o-link')
                                    ->placeholder('e.g. https://www.example.com')
                                    ->autocomplete(false)
                                    ->required(),
                                    Section::make()
                                        ->schema([
                                            TextInput::make('alt_icon')
                                                ->prefixIcon('heroicon-o-hashtag')
                                                ->placeholder('e.g. Alt Icon')
                                                ->label('Alt Icon'),
                                            CuratorPicker::make('icon')
                                                ->label('Icon')
                                                ->maxSize(2048)
                                                ->maxItems(1)
                                                ->helperText('Maximum 2MB.')
                                                ->required(),
                                        ]),
                            ])
                    ])
            ]);
    }
}

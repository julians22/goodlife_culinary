<?php

namespace App\Filament\Pages;

use App\Settings\GallerySettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageGallery extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-photo';

    protected static ?string $title = 'Gallery';

    protected ?string $subheading = 'Manage the gallery section.';

    protected static ?int $navigationSort = 3;

    protected static string $settings = GallerySettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Repeater::make('galleries')
                            ->label('Gallery')
                            ->reorderableWithButtons()
                            ->required()
                            ->schema([
                                TextInput::make('link')
                                    ->prefixIcon('heroicon-o-link')
                                    ->placeholder('e.g. https://www.example.com')
                                    ->label('Link'),
                                TextInput::make('alt_image')
                                    ->prefixIcon('heroicon-o-hashtag')
                                    ->placeholder('e.g. Alt Image')
                                    ->label('Alt Image'),
                                CuratorPicker::make('image')
                                    ->label('Image')
                                    ->maxSize(2048)
                                    ->maxItems(1)
                                    ->helperText('Maximum 2MB.')
                                    ->required(),
                        ])
                ]),
            ]);
    }
}

<?php

namespace App\Filament\Pages;

use App\Settings\BannerSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageBanner extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-stack';

    protected static ?string $title = 'Banner';

    protected ?string $subheading = 'Manage the banner section.';

    protected static ?int $navigationSort = 1;

    protected static string $settings = BannerSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Builder::make('banners')
                            ->label('Banner')
                            ->reorderableWithButtons()
                            ->blockNumbers(false)
                            ->required()
                            ->blocks([
                                Block::make('Image')
                                    ->icon('heroicon-c-photo')
                                    ->schema([
                                        TextInput::make('alt_image')
                                            ->prefixIcon('heroicon-o-hashtag')
                                            ->placeholder('e.g. Alt Image')
                                            ->label('Alt Image'),
                                        CuratorPicker::make('image')
                                            ->label('Image')
                                            ->maxSize(2048)
                                            ->maxItems(1)
                                            ->helperText('Maximum 2MB.')
                                            ->acceptedFileTypes(['image/*'])
                                            ->required(),
                                    ]),
                                Block::make('Video')
                                    ->icon('heroicon-s-video-camera')
                                    ->schema([
                                        CuratorPicker::make('poster')
                                            ->label('Poster')
                                            ->maxSize(2048)
                                            ->maxItems(1)
                                            ->helperText('Maximum 2MB. Poster image for video.')
                                            ->acceptedFileTypes(['image/*'])
                                            ->required(),
                                        CuratorPicker::make('video')
                                            ->label('Video')
                                            ->maxSize(12288)
                                            ->maxItems(1)
                                            ->helperText('Maximum 12MB.')
                                            ->acceptedFileTypes(['video/*'])
                                            ->required(),
                                    ]),
                            ])
                    ])
            ]);
    }
}

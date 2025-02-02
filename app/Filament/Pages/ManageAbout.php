<?php

namespace App\Filament\Pages;

use App\Settings\AboutSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageAbout extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-information-circle';

    protected static ?string $title = 'About';

    protected ?string $subheading = 'Manage the about section.';

    protected static ?int $navigationSort = 2;

    protected static string $settings = AboutSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('about_title')
                            ->label('Title')
                            ->autocomplete(false)
                            ->prefixIcon('heroicon-o-h3')
                            ->placeholder('e.g. About Us')
                            ->required(),
                        RichEditor::make('about_description')
                            ->label('Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'link',
                                'underline', 'redo', 'undo'
                            ])
                            ->required(),
                        Section::make()
                            ->schema([
                                TextInput::make('about_video')
                                    ->label('Video')
                                    ->autocomplete(false)
                                    ->prefixIcon('heroicon-o-link')
                                    ->placeholder('e.g. https://www.example.com')
                                    ->required(),
                                TextInput::make('about_alt_video_thumbnail')
                                    ->prefixIcon('heroicon-o-hashtag')
                                    ->placeholder('e.g. Alt Video Thumbnail')
                                    ->label('Alt Video Thumbnail'),
                                CuratorPicker::make('about_video_thumbnail')
                                    ->label('Video Thumbnail')
                                    ->maxSize(2048)
                                    ->maxItems(1)
                                    ->helperText('Maximum 2MB.')
                                    ->required(),
                            ]),
                        Repeater::make('about_provide')
                            ->label('Provide')
                            ->reorderableWithButtons()
                            ->required()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->autocomplete(false)
                                    ->prefixIcon('heroicon-o-h3')
                                    ->placeholder('e.g. Title')
                                    ->required(),
                                TextInput::make('alt_image')
                                    ->prefixIcon('heroicon-o-hashtag')
                                    ->placeholder('e.g. Alt Image')
                                    ->label('Alt Image'),
                                CuratorPicker::make('image')
                                    ->label('Image')
                                    ->maxSize(2048)
                                    ->maxItems(1)
                                    ->maxItems(1)
                                    ->helperText('Image as background. Maximum 2MB.')
                                    ->required()
                            ]),
                        RichEditor::make('about_provide_description')
                            ->label('Provide Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'link',
                                'underline', 'redo', 'undo'
                            ])
                            ->required()
                    ])
            ]);
    }
}

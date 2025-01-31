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

    protected static ?int $navigationSort = 1;

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
                            ->required(),
                        RichEditor::make('about_description')
                            ->label('Description')
                            ->toolbarButtons([
                                'bold', 'italic', 'link',
                                'underline', 'redo', 'undo'
                            ])
                            ->required(),
                        Grid::make()
                            ->columns([
                                'default' => 1,
                                'sm' => 2,
                                'md' => 4,
                                'lg' => 6,
                                'xl' => 8,
                                '2xl' => 12,
                            ])
                            ->schema([
                                CuratorPicker::make('about_video')
                                    ->columnSpan([
                                        'md' => 2,
                                        'lg' => 3,
                                        'xl' => 4,
                                        '2xl' => 6
                                    ])
                                    ->label('Video')
                                    ->acceptedFileTypes(['video/mp4'])
                                    ->maxSize(3072)
                                    ->maxItems(1)
                                    ->helperText('Maximum 3MB.')
                                    ->required(),
                                CuratorPicker::make('about_video_thumbnail')
                                    ->columnSpan([
                                        'md' => 2,
                                        'lg' => 3,
                                        'xl' => 4,
                                        '2xl' => 6
                                    ])
                                    ->label('Thumbnail')
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
                                    ->required(),
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

<?php

namespace App\Filament\Pages;

use App\Settings\SocialMediaSettings;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageSocialMedia extends SettingsPage
{
    protected static ?string $navigationGroup = 'Section Settings';

    protected static ?string $navigationIcon = 'heroicon-s-chat-bubble-left-right';

    protected static ?string $title = 'Social Media';

    protected ?string $subheading = 'Manage the social media section.';

    protected static ?int $navigationSort = 3;

    protected static string $settings = SocialMediaSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
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
                                TextInput::make('socmed_title_1')
                                    ->columnSpan([
                                        'md' => 2,
                                        'lg' => 3,
                                        'xl' => 4,
                                        '2xl' => 6
                                    ])
                                    ->label('Title 1')
                                    ->autocomplete(false)
                                    ->helperText('Required title')
                                    ->required(),
                                TextInput::make('socmed_title_2')
                                    ->columnSpan([
                                        'md' => 2,
                                        'lg' => 3,
                                        'xl' => 4,
                                        '2xl' => 6
                                    ])
                                    ->label('Title 2')
                                    ->autocomplete(false)
                                    ->helperText('Optional colored title'),
                            ]),
                            RichEditor::make('socmed_description')
                                ->label('Description')
                                ->toolbarButtons([
                                    'bold', 'italic', 'link',
                                    'underline', 'redo', 'undo'
                                ])
                                ->required(),
                            Repeater::make('socmed_links')
                                ->label('Links')
                                ->reorderableWithButtons()
                                ->required()
                                ->schema([
                                    TextInput::make('icon')
                                        ->label('Icon')
                                        ->autocomplete(false)
                                        ->required(),
                                    TextInput::make('link')
                                        ->label('Link')
                                        ->autocomplete(false)
                                        ->required(),
                                    CuratorPicker::make('image')
                                        ->label('Image')
                                        ->maxItems(1),
                                ])
                    ])
            ]);
    }
}

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

    protected static ?int $navigationSort = 5;

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
                                    ->prefixIcon('heroicon-o-h3')
                                    ->placeholder('e.g. Follow Us on')
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
                                    ->prefixIcon('heroicon-o-h3')
                                    ->placeholder('e.g. Social Media')
                                    ->autocomplete(false)
                                    ->helperText('Colored title (Optional)'),
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
                                    Section::make()
                                        ->schema([
                                            TextInput::make('alt_background')
                                                ->prefixIcon('heroicon-o-hashtag')
                                                ->placeholder('e.g. Alt Background')
                                                ->label('Alt Background'),
                                            CuratorPicker::make('background')
                                                ->label('Background')
                                                ->maxSize(2048)
                                                ->maxItems(1)
                                                ->helperText('Maximum 2MB.')
                                                ->required(),
                                        ])
                                ])
                    ])
            ]);
    }
}

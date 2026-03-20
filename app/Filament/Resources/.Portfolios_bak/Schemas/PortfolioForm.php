<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Portfolio')
                    ->tabs([
                        Tabs\Tab::make('Content')
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, $set) => 
                                        $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                                
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true),

                                RichEditor::make('description')
                                    ->required()
                                    ->columnSpanFull(),

                                Select::make('techStacks')
                                    ->relationship('techStacks', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        
                        Tabs\Tab::make('Images')
                            ->schema([
                                Repeater::make('images')
                                    ->relationship('images')
                                    ->schema([
                                        FileUpload::make('path')
                                            ->image()
                                            ->directory('portfolio-images')
                                            ->disk('public')
                                            ->required(),
                                        Toggle::make('is_featured')
                                            ->label('Featured Image'),
                                    ])
                                    ->grid(2)
                                    ->columnSpanFull(),
                            ]),

                        Tabs\Tab::make('SEO')
                            ->schema([
                                TextInput::make('seo_title')
                                    ->label('SEO Title')
                                    ->placeholder('Defaults to Title'),
                                RichEditor::make('seo_description')
                                    ->label('SEO Description')
                                    ->placeholder('Defaults to Description summary'),
                                Section::make('Open Graph')
                                    ->description('Tags for social media sharing')
                                    ->schema([
                                        TextInput::make('og_title')
                                            ->label('OG Title'),
                                        RichEditor::make('og_description')
                                            ->label('OG Description'),
                                        FileUpload::make('og_image')
                                            ->image()
                                            ->directory('seo-images')
                                            ->disk('public'),
                                    ])->collapsible(),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }
}

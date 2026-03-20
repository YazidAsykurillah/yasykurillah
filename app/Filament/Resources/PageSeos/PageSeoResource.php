<?php

namespace App\Filament\Resources\PageSeos;

use App\Filament\Resources\PageSeos\Pages\ManagePageSeos;
use App\Models\PageSeo;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageSeoResource extends Resource
{
    protected static ?string $model = PageSeo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAlt;

    protected static ?string $recordTitleAttribute = 'page_path';

    protected static ?string $navigationLabel = 'Page SEO';

    protected static ?string $pluralLabel = 'Page SEOs';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Page Alignment')
                    ->schema([
                        TextInput::make('page_path')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->placeholder('e.g. / or /portfolio')
                            ->helperText('Relative path of the page from the base URL.'),
                    ]),

                Section::make('Search Engine Optimization')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('SEO Title'),
                        Textarea::make('seo_description')
                            ->label('SEO Description')
                            ->columnSpanFull(),
                    ])->collapsible(),

                Section::make('Open Graph (Social Media)')
                    ->description('Configuration for social media sharing previews')
                    ->schema([
                        TextInput::make('og_title')
                            ->label('OG Title'),
                        Textarea::make('og_description')
                            ->label('OG Description')
                            ->columnSpanFull(),
                        FileUpload::make('og_image')
                            ->image()
                            ->directory('seo-images')
                            ->disk('public'),
                    ])->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('page_path')
            ->columns([
                TextColumn::make('page_path')
                    ->label('Path')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('seo_title')
                    ->label('Title')
                    ->searchable()
                    ->limit(30),
                ImageColumn::make('og_image')
                    ->label('OG Image'),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePageSeos::route('/'),
        ];
    }
}

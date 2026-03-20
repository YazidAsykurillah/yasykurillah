<?php

namespace App\Filament\Resources\Messages;

use App\Filament\Resources\Messages\Pages\ManageMessages;
use App\Models\Message;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEnvelope;

    protected static ?string $navigationLabel = 'Messages';

    protected static ?string $pluralLabel = 'Messages';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Message Details')
                    ->schema([
                        TextInput::make('name')
                            ->disabled(),
                        TextInput::make('email')
                            ->email()
                            ->disabled(),
                        TextInput::make('status')
                            ->required(),
                        Textarea::make('message')
                            ->disabled()
                            ->columnSpanFull(),
                        TextInput::make('ip_address')
                            ->label('IP Address')
                            ->disabled(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'unread' => 'danger',
                        'read' => 'success',
                        'archived' => 'gray',
                        default => 'info',
                    })
                    ->sortable(),
                TextColumn::make('message')
                    ->limit(50),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'unread' => 'Unread',
                        'read' => 'Read',
                        'archived' => 'Archived',
                    ]),
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
            'index' => ManageMessages::route('/'),
        ];
    }
}

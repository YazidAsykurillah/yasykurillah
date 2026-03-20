<?php

namespace App\Filament\Resources\PageSeos\Pages;

use App\Filament\Resources\PageSeos\PageSeoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePageSeos extends ManageRecords
{
    protected static string $resource = PageSeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

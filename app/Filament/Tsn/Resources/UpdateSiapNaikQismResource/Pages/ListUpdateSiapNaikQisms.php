<?php

namespace App\Filament\Tsn\Resources\UpdateSiapNaikQismResource\Pages;

use App\Filament\Tsn\Resources\UpdateSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpdateSiapNaikQisms extends ListRecords
{
    protected static string $resource = UpdateSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

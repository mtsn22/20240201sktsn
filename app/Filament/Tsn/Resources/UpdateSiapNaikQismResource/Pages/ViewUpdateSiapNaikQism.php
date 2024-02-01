<?php

namespace App\Filament\Tsn\Resources\UpdateSiapNaikQismResource\Pages;

use App\Filament\Tsn\Resources\UpdateSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUpdateSiapNaikQism extends ViewRecord
{
    protected static string $resource = UpdateSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

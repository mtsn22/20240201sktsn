<?php

namespace App\Filament\Tsn\Resources\UpdateSiapNaikQismResource\Pages;

use App\Filament\Tsn\Resources\UpdateSiapNaikQismResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpdateSiapNaikQism extends EditRecord
{
    protected static string $resource = UpdateSiapNaikQismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

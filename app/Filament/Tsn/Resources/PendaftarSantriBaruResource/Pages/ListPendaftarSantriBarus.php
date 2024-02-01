<?php

namespace App\Filament\Tsn\Resources\PendaftarSantriBaruResource\Pages;

use App\Filament\Tsn\Resources\PendaftarSantriBaruResource;
use App\Filament\Tsn\Resources\PendaftarSantriBaruResource\Widgets\ListPendaftarSantriBaru;
use Filament\Actions;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Pages\ListRecords;

class ListPendaftarSantriBarus extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = PendaftarSantriBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ListPendaftarSantriBaru::class,
        ];
    }
}

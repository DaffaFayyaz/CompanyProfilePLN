<?php

namespace App\Filament\Resources\FotoUtamaHalamanResource\Pages;

use App\Filament\Resources\FotoUtamaHalamanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotoUtamaHalamen extends ListRecords
{
    protected static string $resource = FotoUtamaHalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

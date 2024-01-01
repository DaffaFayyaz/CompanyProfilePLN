<?php

namespace App\Filament\Resources\FotoUtamaHalamanResource\Pages;

use App\Filament\Resources\FotoUtamaHalamanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoUtamaHalaman extends EditRecord
{
    protected static string $resource = FotoUtamaHalamanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\JumlahAlatResource\Pages;

use App\Filament\Resources\JumlahAlatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahAlat extends EditRecord
{
    protected static string $resource = JumlahAlatResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

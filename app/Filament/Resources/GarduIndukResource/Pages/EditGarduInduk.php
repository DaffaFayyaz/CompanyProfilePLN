<?php

namespace App\Filament\Resources\GarduIndukResource\Pages;

use App\Filament\Resources\GarduIndukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGarduInduk extends EditRecord
{
    protected static string $resource = GarduIndukResource::class;
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

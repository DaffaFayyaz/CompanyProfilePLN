<?php

namespace App\Filament\Resources\TrafoResource\Pages;

use App\Filament\Resources\TrafoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrafo extends EditRecord
{
    protected static string $resource = TrafoResource::class;
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

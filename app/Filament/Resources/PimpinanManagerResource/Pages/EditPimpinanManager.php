<?php

namespace App\Filament\Resources\PimpinanManagerResource\Pages;

use App\Filament\Resources\PimpinanManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPimpinanManager extends EditRecord
{
    protected static string $resource = PimpinanManagerResource::class;
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

<?php

namespace App\Filament\Resources\JajaranManajemenResource\Pages;

use App\Filament\Resources\JajaranManajemenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJajaranManajemen extends EditRecord
{
    protected static string $resource = JajaranManajemenResource::class;
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

<?php

namespace App\Filament\Resources\PimpinanManagerResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PimpinanManagerResource;

class CreatePimpinanManager extends CreateRecord
{
    protected static string $resource = PimpinanManagerResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Pimpinan Manager Registered')
            ->body('Data Pimpinan Manager Berhasil ditambahkan');
    }
}

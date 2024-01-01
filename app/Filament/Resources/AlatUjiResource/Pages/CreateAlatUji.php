<?php

namespace App\Filament\Resources\AlatUjiResource\Pages;

use App\Filament\Resources\AlatUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateAlatUji extends CreateRecord
{
    protected static string $resource = AlatUjiResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Alat Uji Registered')
            ->body('Data Alat Uji Berhasil ditambahkan');
    }
}

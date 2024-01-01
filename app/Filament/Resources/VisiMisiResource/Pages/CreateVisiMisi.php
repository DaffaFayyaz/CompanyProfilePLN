<?php

namespace App\Filament\Resources\VisiMisiResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\VisiMisiResource;

class CreateVisiMisi extends CreateRecord
{
    protected static string $resource = VisiMisiResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Visi dan Misi Registered')
            ->body('Data Visi dan Misi Berhasil ditambahkan');
    }
}

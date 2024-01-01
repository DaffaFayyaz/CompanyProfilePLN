<?php

namespace App\Filament\Resources\JajaranManajemenResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\JajaranManajemenResource;

class CreateJajaranManajemen extends CreateRecord
{
    protected static string $resource = JajaranManajemenResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Jajaran Manajemen Registered')
            ->body('Data Jajaran Manajemen Berhasil ditambahkan');
    }
}

<?php

namespace App\Filament\Resources\JumlahAlatResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\JumlahAlatResource;

class CreateJumlahAlat extends CreateRecord
{
    protected static string $resource = JumlahAlatResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Jumlah Alat Registered')
            ->body('Data Jumlah Alat Berhasil ditambahkan');
    }
}

<?php

namespace App\Filament\Resources\GarduIndukResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GarduIndukResource;

class CreateGarduInduk extends CreateRecord
{
    protected static string $resource = GarduIndukResource::class;
        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Gardu Induk Registered')
            ->body('Data Gardu Induk Berhasil ditambahkan');
    }
}

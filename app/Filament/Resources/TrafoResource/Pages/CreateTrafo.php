<?php

namespace App\Filament\Resources\TrafoResource\Pages;

use App\Filament\Resources\TrafoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreateTrafo extends CreateRecord
{
    protected static string $resource = TrafoResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Trafos Registered')
            ->body('Data Trafo Berhasil ditambahkan');
    }

    
}

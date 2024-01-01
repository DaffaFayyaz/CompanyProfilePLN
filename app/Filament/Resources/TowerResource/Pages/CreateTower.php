<?php

namespace App\Filament\Resources\TowerResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\TowerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTower extends CreateRecord
{
    protected static string $resource = TowerResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Tower Registered')
            ->body('Data Tower Berhasil ditambahkan');
    }
}

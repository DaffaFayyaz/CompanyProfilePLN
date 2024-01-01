<?php

namespace App\Filament\Resources\BaylineResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BaylineResource;

class CreateBayline extends CreateRecord
{
    protected static string $resource = BaylineResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Bayline Registered')
            ->body('Data Bayline Berhasil ditambahkan');
    }
}

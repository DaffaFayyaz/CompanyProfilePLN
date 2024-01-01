<?php

namespace App\Filament\Resources\LandingPageResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\LandingPageResource;

class CreateLandingPage extends CreateRecord
{
    protected static string $resource = LandingPageResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Landing Pages Registered')
            ->body('Data Landing Page Berhasil ditambahkan');
    }
}

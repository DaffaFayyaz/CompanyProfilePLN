<?php

namespace App\Filament\Resources\BaylineResource\Pages;

use App\Filament\Resources\BaylineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBayline extends EditRecord
{
    protected static string $resource = BaylineResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

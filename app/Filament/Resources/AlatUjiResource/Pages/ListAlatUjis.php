<?php

namespace App\Filament\Resources\AlatUjiResource\Pages;

use App\Filament\Resources\AlatUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlatUjis extends ListRecords
{
    protected static string $resource = AlatUjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

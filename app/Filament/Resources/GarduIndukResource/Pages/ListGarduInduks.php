<?php

namespace App\Filament\Resources\GarduIndukResource\Pages;

use App\Filament\Resources\GarduIndukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGarduInduks extends ListRecords
{
    protected static string $resource = GarduIndukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PimpinanManagerResource\Pages;

use App\Filament\Resources\PimpinanManagerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPimpinanManagers extends ListRecords
{
    protected static string $resource = PimpinanManagerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

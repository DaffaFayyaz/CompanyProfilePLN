<?php

namespace App\Filament\Resources\BaylineResource\Pages;

use App\Filament\Resources\BaylineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaylines extends ListRecords
{
    protected static string $resource = BaylineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

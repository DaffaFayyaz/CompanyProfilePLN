<?php

namespace App\Filament\Resources\JumlahAlatResource\Pages;

use App\Filament\Resources\JumlahAlatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahAlats extends ListRecords
{
    protected static string $resource = JumlahAlatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

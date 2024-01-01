<?php

namespace App\Filament\Resources\JajaranManajemenResource\Pages;

use App\Filament\Resources\JajaranManajemenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJajaranManajemens extends ListRecords
{
    protected static string $resource = JajaranManajemenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

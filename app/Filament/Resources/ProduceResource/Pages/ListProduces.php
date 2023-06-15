<?php

namespace App\Filament\Resources\ProduceResource\Pages;

use App\Filament\Resources\ProduceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProduces extends ListRecords
{
    protected static string $resource = ProduceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

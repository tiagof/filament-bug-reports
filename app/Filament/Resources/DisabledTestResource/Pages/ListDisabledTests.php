<?php

namespace App\Filament\Resources\DisabledTestResource\Pages;

use App\Filament\Resources\DisabledTestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisabledTests extends ListRecords
{
    protected static string $resource = DisabledTestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

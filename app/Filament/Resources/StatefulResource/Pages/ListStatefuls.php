<?php

namespace App\Filament\Resources\StatefulResource\Pages;

use App\Filament\Resources\StatefulResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStatefuls extends ListRecords
{
    protected static string $resource = StatefulResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

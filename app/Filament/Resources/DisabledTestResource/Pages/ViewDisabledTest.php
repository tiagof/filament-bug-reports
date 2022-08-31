<?php

namespace App\Filament\Resources\DisabledTestResource\Pages;

use App\Filament\Resources\DisabledTestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDisabledTest extends ViewRecord
{
    protected static string $resource = DisabledTestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

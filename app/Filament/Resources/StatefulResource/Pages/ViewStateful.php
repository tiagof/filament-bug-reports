<?php

namespace App\Filament\Resources\StatefulResource\Pages;

use App\Filament\Resources\StatefulResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewStateful extends ViewRecord
{
    protected static string $resource = StatefulResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

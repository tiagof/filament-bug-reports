<?php

namespace App\Filament\Resources\StatefulResource\Pages;

use App\Filament\Resources\StatefulResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStateful extends EditRecord
{
    protected static string $resource = StatefulResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

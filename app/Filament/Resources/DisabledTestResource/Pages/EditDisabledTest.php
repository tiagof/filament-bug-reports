<?php

namespace App\Filament\Resources\DisabledTestResource\Pages;

use App\Filament\Resources\DisabledTestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisabledTest extends EditRecord
{
    protected static string $resource = DisabledTestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

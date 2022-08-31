<?php

namespace App\Filament\Resources\DisabledTestResource\Pages;

use App\Filament\Resources\DisabledTestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDisabledTest extends CreateRecord
{
    protected static string $resource = DisabledTestResource::class;
}

<?php

namespace App\Filament\Resources\StatefulResource\Pages;

use App\Filament\Resources\StatefulResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStateful extends CreateRecord
{
    protected static string $resource = StatefulResource::class;
}

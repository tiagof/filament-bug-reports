<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisabledTestResource\Pages;
use App\Filament\Resources\DisabledTestResource\RelationManagers;
use App\Models\DisabledTest;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class DisabledTestResource extends Resource
{
    protected static ?string $model = DisabledTest::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->reactive(),

                Forms\Components\MultiSelect::make('select With problem')
                    ->options([
                        'a' => 'A',
                        'b' => 'B',
                    ])
                    // this DOESN'T work
                    ->disabled(fn (callable $get) => strlen($get('name')) % 2),

                Forms\Components\Select::make('select ok')
                    ->options([
                        'a' => 'A',
                        'b' => 'B',
                    ])
                    // this DOES
                    ->disabled(fn (callable $get) => strlen($get('name')) % 2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDisabledTests::route('/'),
            'create' => Pages\CreateDisabledTest::route('/create'),
            'view' => Pages\ViewDisabledTest::route('/{record}'),
            'edit' => Pages\EditDisabledTest::route('/{record}/edit'),
        ];
    }
}

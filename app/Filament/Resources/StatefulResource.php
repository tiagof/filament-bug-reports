<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatefulResource\Pages;
use App\Filament\Resources\StatefulResource\RelationManagers;
use App\Models\Stateful;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatefulResource extends Resource
{
    protected static ?string $model = Stateful::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('state.created_at')
            ->columns([
                Tables\Columns\TextColumn::make('state.created_at')->sortable()
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
            'index' => Pages\ListStatefuls::route('/'),
            'create' => Pages\CreateStateful::route('/create'),
            'view' => Pages\ViewStateful::route('/{record}'),
            'edit' => Pages\EditStateful::route('/{record}/edit'),
        ];
    }
}

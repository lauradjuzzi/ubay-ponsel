<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PulsaResource\Pages;
use App\Filament\Resources\PulsaResource\RelationManagers;
use App\Models\Pulsa;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PulsaResource extends Resource
{
    protected static ?string $model = Pulsa::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->string(),
                Select::make('service')->string()->options([
                    'Telkomsel' => 'Telkomsel',
                    'Indosat' => 'Indosat',
                    'Smartfreen' => 'Smartfreen',
                    'IM3' => 'IM3',
                    'XL' => 'XL',
                ])->placeholder("select provider"),
                TextInput::make('price')->integer(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('service'),
                TextColumn::make('price')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePulsas::route('/'),
        ];
    }
}

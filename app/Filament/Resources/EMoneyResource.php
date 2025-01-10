<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EMoneyResource\Pages;
use App\Filament\Resources\EMoneyResource\RelationManagers;
use App\Models\EMoney;
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

class EMoneyResource extends Resource
{
    protected static ?string $model = EMoney::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->string(),
                Select::make('service')->string()->options([
                    'Dana' => 'Dana',
                    'ShopeePay' => 'ShopeePay',
                    'Ovo' => 'Ovo',
                    'Gopay' => 'Gopay',
                    'TapCash' => 'TapCash',
                ])->placeholder("select e-money"),
                TextInput::make('price')->integer(),
                Select::make('status')->string()->options([
                    'Tersedia' => 'Tersedia',
                    'Tidak Tersedia' => 'Tidak Tersedia',
                ])->placeholder("select status"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('service'),
                TextColumn::make('price'),
                TextColumn::make('status')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ManageEMoney::route('/'),
        ];
    }
}

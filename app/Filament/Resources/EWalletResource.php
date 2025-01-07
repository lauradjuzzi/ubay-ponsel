<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EWalletResource\Pages;
use App\Filament\Resources\EWalletResource\RelationManagers;
use App\Models\EWallet;
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

class EWalletResource extends Resource
{
    protected static ?string $model = EWallet::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->string(),
                Select::make('service')->string()->options([
                    'Bayarind' => 'Bayarind',
                    'GoPay' => 'GoPay',
                    'Dana' => 'Dana',
                    'OVO' => 'OVO',
                    'ShopeePay' => 'ShopeePay',
                ])->placeholder("select e-wallet"),
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
            'index' => Pages\ManageEWallets::route('/'),
        ];
    }
}

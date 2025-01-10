<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TokenResource\Pages;
use App\Filament\Resources\TokenResource\RelationManagers;
use App\Models\token;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokenResource extends Resource
{
    protected static ?string $model = token::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('Nominal')->string()->options([
                    'Rp. 20.000' => 'Rp. 20.000',
                    'Rp. 50.000' => 'Rp. 50.000',
                    'Rp. 100.000' => 'Rp. 100.000',
                    'Rp. 150.000' => 'Rp. 150.000',
                    'Rp. 200.000' => 'Rp. 1200.000',
                    'Rp. 250.000' => 'Rp. 250.000',
                    'Rp. 500.000' => 'Rp. 500.000',
                ])->placeholder("select nominal"),
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
                TextColumn::make('Nominal'),
                TextColumn::make('price'),
                TextColumn::make('status')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
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
            'index' => Pages\ManageTokens::route('/')
        ];
    }
}

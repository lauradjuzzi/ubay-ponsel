<?php

namespace App\Filament\Resources\EMoneyResource\Pages;

use App\Filament\Resources\EMoneyResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEMoney extends ManageRecords
{
    protected static string $resource = EMoneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

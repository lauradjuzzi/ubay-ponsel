<?php

namespace App\Filament\Resources\EWalletResource\Pages;

use App\Filament\Resources\EWalletResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEWallets extends ManageRecords
{
    protected static string $resource = EWalletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PulsaResource\Pages;

use App\Filament\Resources\PulsaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePulsas extends ManageRecords
{
    protected static string $resource = PulsaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

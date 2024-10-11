<?php

namespace App\Filament\Resources\SilabosResource\Pages;

use App\Filament\Resources\SilabosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSilabos extends ListRecords
{
    protected static string $resource = SilabosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

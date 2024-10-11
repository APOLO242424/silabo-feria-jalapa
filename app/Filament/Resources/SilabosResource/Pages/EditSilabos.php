<?php

namespace App\Filament\Resources\SilabosResource\Pages;

use App\Filament\Resources\SilabosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSilabos extends EditRecord
{
    protected static string $resource = SilabosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

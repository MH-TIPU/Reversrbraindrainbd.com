<?php

namespace App\Filament\Resources\HumanResource\Pages;

use App\Filament\Resources\HumanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHuman extends EditRecord
{
    protected static string $resource = HumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

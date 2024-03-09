<?php

namespace App\Filament\Resources\FootResource\Pages;

use App\Filament\Resources\FootResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFoot extends EditRecord
{
    protected static string $resource = FootResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

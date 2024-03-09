<?php

namespace App\Filament\Resources\FootResource\Pages;

use App\Filament\Resources\FootResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeet extends ListRecords
{
    protected static string $resource = FootResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

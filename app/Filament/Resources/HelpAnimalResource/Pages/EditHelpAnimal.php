<?php

namespace App\Filament\Resources\HelpAnimalResource\Pages;

use App\Filament\Resources\HelpAnimalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHelpAnimal extends EditRecord
{
    protected static string $resource = HelpAnimalResource::class;

    protected function getActions(): array
    {
        return [

        ];
    }
}

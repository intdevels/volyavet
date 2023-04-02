<?php

namespace App\Filament\Resources\OurTeamResource\Pages;

use App\Filament\Resources\OurTeamResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurTeams extends ListRecords
{
    protected static string $resource = OurTeamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

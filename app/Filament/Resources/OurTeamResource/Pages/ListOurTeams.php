<?php

namespace App\Filament\Resources\OurTeamResource\Pages;

use App\Filament\Resources\OurTeamResource;
use App\Models\OurTeam;
use App\Models\Page;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurTeams extends ListRecords
{
    protected static string $resource = OurTeamResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Создать команду'),
            Actions\Action::make('Обновить заголовок')
              ->label('Обновить заголовок ceo')
              ->color('secondary')
              ->size('lg')
              ->icon('heroicon-s-cog')
              ->mountUsing(function ($form){
                  $form->fill([
                    'seo_title' => $this->getSectionTitle()
                  ]);
              })
              ->action(function (array $data): void {
                  Page::query()->section('home','our_team')->update([
                    'seo_title' => $data['seo_title']
                  ]);
              })
              ->form([
                TextInput::make('seo_title')
                  ->label('Заголовок')
                  ->required(),
            ])
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
          OurTeamResource\Widgets\OurTeamOverview::class,
        ];
    }

    protected function getSectionTitle(): string {
        $seo_title = Page::query()->section('home','our_team')->first();
        return $seo_title->seo_title;
    }
}

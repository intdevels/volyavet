<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use App\Models\Page;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
protected static string $resource = ServiceResource::class;

    protected function getActions(): array
    {
        return [
          Actions\CreateAction::make()
            ->label('Создать услугу'),
          Actions\Action::make('Обновить заголовок')
            ->label('Обновить заголовок ceo')
            ->color('secondary')
            ->size('lg')
            ->icon('heroicon-s-cog')
            ->mountUsing(function ($form) {
                $form->fill([
                  'seo_title' => $this->getSectionTitle(),
                  'seo_description' => $this->getSectionDescription()
                ]);
            })
            ->action(function (array $data): void {
                Page::query()->section('home', 'services')->update([
                  'seo_title' => $data['seo_title'],
                  'seo_description' => $data['seo_description']
                ]);
            })
            ->form([
              TextInput::make('seo_title')
                ->label('Загаловок')
                ->required(),
              Textarea::make('seo_description')
                ->label('Описание')
                ->required(),
            ])
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
          ServiceResource\Widgets\ServiceOverview::class,
        ];
    }

    protected function getSectionTitle(): string {
        $seo_title = Page::query()->section('home','services')->first();
        return $seo_title->seo_title;
    }

    protected function getSectionDescription(): string {
        $seo_title = Page::query()->section('home','services')->first();
        return $seo_title->seo_description;
    }
}

<?php

namespace App\Filament\Resources\ServiceResource\Widgets;

use App\Models\Page;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class ServiceOverview extends BaseWidget
{

    protected static ?string $pollingInterval = null;

    protected function getCards(): array
    {
        $seo_title = Page::query()->section('home','services')->first();
        return [
          Card::make('Загаловок для сео', '')
            ->value($seo_title->seo_title),
          Card::make('Описание для сео', '')
            ->description($seo_title->seo_description)
            ->descriptionColor('secondary'),
        ];
    }
}

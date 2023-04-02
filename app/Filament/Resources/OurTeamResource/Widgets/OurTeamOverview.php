<?php

namespace App\Filament\Resources\OurTeamResource\Widgets;

use App\Models\Page;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OurTeamOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    protected function getCards(): array
    {
        $seo_title = Page::query()->section('home','our_team')->first();
        return [
          Card::make('Загаловок для сео', $seo_title->seo_title),
        ];
    }
}
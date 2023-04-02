<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
          [
            'name' => 'home',
            'section_name' => 'our_team',
            'seo_title' => 'Наша команда'
          ],
          [
            'name' => 'home',
            'section_name' => 'services',
            'seo_title' => 'Услуги',
            'seo_description' => 'Мы круглосуточно на связи и готовы оказать качественную медицинскую помощь вашему любимцу в любое время суток'
          ],
        ];


        foreach ($pages as $page){
            Page::create($page);
        }

    }
}

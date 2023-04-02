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
          'name' => 'home',
          'section_name' => 'our_team',
          'seo_title' => 'Наша команда'
        ];

        Page::create($pages);
    }
}

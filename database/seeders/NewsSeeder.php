<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::query()->create([
          'title' => 'Новости и акции',
          'title_library' => 'Библиотека',
          'title_article_interesting' => 'Вам может быть интересно'
        ]);
    }
}

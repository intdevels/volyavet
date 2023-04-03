<?php

namespace Database\Seeders;

use App\Models\Appeal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appeal::query()->create([
          'title' => 'Когда стоит обратиться в клинику ?',
          'description' => 'Если вы обноружили у своего любимца какой-либо из признаков описанныйь ниже, то вамнемедленно стоит обратится к ветеринару',
        ]);
    }
}

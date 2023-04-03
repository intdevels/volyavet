<?php

namespace Database\Seeders;

use App\Models\HelpAnimal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelpAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HelpAnimal::query()->create([
           'title' => 'Каким животным мы помогаем',
           'description' => 'Наша ветеринарная клиника многопрофильная, поэтому для любого вашего питомца мы подберём того врача, который знает, как найти к нему подход и сможет назначить подходящее лечение',
        ]);
    }
}

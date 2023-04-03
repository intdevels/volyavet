<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::query()->create([
           'whatsapp' => '+7 (977) 799-87-82',
           'telegram' => 'https://web.telegram.org',
           'address' => 'ул. Германа Титова, 12, корп. 1, г. Химки',
           'email' => 'volyavet@yandex.ru',
           'phone' => '+7 (977) 799-87-82',
        ]);
    }
}

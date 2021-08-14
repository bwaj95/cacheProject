<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsJasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AuthorsJason::factory(1)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsGanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AuthorsGana::factory(1)->create();
    }
}

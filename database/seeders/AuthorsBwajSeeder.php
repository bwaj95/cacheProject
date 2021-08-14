<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuthorsBwajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AuthorsBwaj::factory(1)->create();
    }
}

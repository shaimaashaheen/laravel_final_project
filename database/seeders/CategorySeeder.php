<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\post;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categories::truncate();

        Categories::factory()->create(
            [
                'name' => 'Laptops',
                'slug' => 'laptops'
            ]
        );
        Categories::factory()->create(
            [
                'name' => 'Phones',
                'slug' => 'phones'
            ]
        );
    }
}

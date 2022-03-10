<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'         => 'root',
            'description'  => 'Thi is th root category, don\'t delete this one',
            'parent_id'    => null,
            'menu'         => 0,
        ]);

        $faker = Faker::create();

        for($i = 1; $i <= 10; $i++) {
            Category::create([
                'name' => $faker->name,
                'description' => $faker->realText(100),
                'parent_id' => 1,
                'menu' => 1
            ]);
        }
    }
}

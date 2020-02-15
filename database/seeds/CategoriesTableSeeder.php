<?php

use App\Models\Category;
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
        $categories     = [
            'Shop', 'Hotel', 'Restaurant', 'Fitness', 'Event'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name'  => $category
            ]);
        }
    }
}
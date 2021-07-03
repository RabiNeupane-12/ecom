<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        // Product::truncate();

         \App\Models\User::factory(10)->create();
        $category= \App\Models\Category::create([
            'category_name'=>'accessories',
            'category_desc'=>'This category contains accessories'
        ]);

               Product::factory(5)->create([
                   'category_id' => 3
               ]);
             
          
    }
}

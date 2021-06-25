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
        Category::truncate();
        Product::truncate();

        //  \App\Models\User::factory(10)->create();
        $category= \App\Models\Category::create([
            'category_name'=>'Mobile',
            'category_desc'=>'This category contains Mobile'
        ]);

               Product::create([
             'product_name' => 'Apple Mobile',        
             'product_desc' => 'This is an Iphone',
             'price' => '100000',
             'cagetory_id'=>$category->id
             
            ]);
    }
}

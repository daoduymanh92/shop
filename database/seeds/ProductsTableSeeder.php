<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100 ; $i++) { 
        	DB::table('products')->insert(
        		array(
        			'name' => 'product_'. $i,
        			'slug' => 'product-'. $i,
        			'quantity' => rand(5, 100),
        			'price' => rand(10, 50),
        			'currency' => 'usd',
        			'status' => 1,
        			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
        			'category_id' => rand(1, 2)
        		)
        	);
        }
    }
}

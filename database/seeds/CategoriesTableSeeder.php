<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 2 ; $i++) { 
        	DB::table('categories')->insert(
        		array(
        			'name' => 'Category_'. $i,
        			'slug' => 'category-'.$i,
        			'status' => 1,
        			'menu_order' => $i
        		)	
        	);
        }
    }
}

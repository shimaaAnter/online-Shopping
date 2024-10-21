<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\prodect;

class prodectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        prodect::create(['name'=>'T-shirt1', 'discription'=>"shirt1shirt1", 'image'=>"1-1.jpg", 'rating'=>'2','category_id'=>"2"]);
        prodect::create(['name'=>'Pants', 'discription'=>"PantsPants", 'image'=>"2-1.jpg", 'rating'=>'3','category_id'=>"1"]);
        prodect::create(['name'=>'Dress1', 'discription'=>"Dress1", 'image'=>"3-1.jpg", 'rating'=>'4','category_id'=>"3"]);
        prodect::create(['name'=>'Shirt1', 'discription'=>"ShirtShirt", 'image'=>"4-1.jpg", 'rating'=>'3','category_id'=>"4"]);
        prodect::create(['name'=>'Blouses1', 'discription'=>"BlousesBlouses", 'image'=>"5-1.jpg", 'rating'=>'2','category_id'=>"5"]);
        prodect::create(['name'=>'Shoes1', 'discription'=>"ShoesShoes", 'image'=>"6-1.jpg", 'rating'=>'2','category_id'=>"6"]);
        prodect::create(['name'=>'Bag1', 'discription'=>"Bags", 'image'=>"7-1.jpg", 'rating'=>'2','category_id'=>"7"]);
        prodect::create(['name'=>'Pants', 'discription'=>"PantsPants", 'image'=>"8-1.jpg", 'rating'=>'4','category_id'=>"1"]);
        prodect::create(['name'=>'T-shirt2', 'discription'=>"T-shirt2T-shirt2", 'image'=>"9-1.jpg", 'rating'=>'2','category_id'=>"2"]);
        prodect::create(['name'=>'Dress2', 'discription'=>"Dress1Dress1", 'image'=>"10-1.jpg", 'rating'=>'2','category_id'=>"3"]);
    }
}

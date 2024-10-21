<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create(['name'=>'Pants']);
        category::create(['name'=>'T-shirt']);
        category::create(['name'=>'Dresses']);
        category::create(['name'=>'Shirt']);
        category::create(['name'=>'Blouses']);
        category::create(['name'=>'Shoes']);
        category::create(['name'=>'Bags']);
    }
}

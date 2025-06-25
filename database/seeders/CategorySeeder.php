<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // إنشاء بعض الفئات
        Category::create(['name' => "Men's Wear"]);
        Category::create(['name' => "Women's Wear"]);
        Category::create(['name' => "Kid's Wear"]);
    }
}

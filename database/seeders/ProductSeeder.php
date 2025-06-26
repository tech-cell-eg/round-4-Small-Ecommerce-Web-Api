<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $men = Category::where('name', "Men's Wear")->first();
        $women = Category::where('name', "Women's Wear")->first();
        $kids = Category::where('name', "Kid's Wear")->first();

        Product::create([
            'name' => 'Men T-Shirt',
            'description' => 'Comfortable cotton t-shirt for men.',
            'price' => 29.99,
            'image' => 'default.jpg',
            'category_id' => $men->id,
        ]);

        Product::create([
            'name' => 'Women Dress',
            'description' => 'Elegant summer dress for women.',
            'price' => 49.99,
            'image' => 'default.jpg',
            'category_id' => $women->id,
        ]);

        Product::create([
            'name' => 'Kids Jacket',
            'description' => 'Warm and stylish jacket for kids.',
            'price' => 39.99,
            'image' => 'default.jpg',
            'category_id' => $kids->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Testimonial::create([
            'customer_name' => 'John Doe',
            'customer_image' => 'https://example.com/images/john.jpg',
            'content' => 'Excellent service, very happy with my purchase!',
        ]);

        Testimonial::create([
            'customer_name' => 'Jane Smith',
            'customer_image' => 'https://example.com/images/jane.jpg',
            'content' => 'Very professional and quick delivery.',
        ]);

        Testimonial::create([
            'customer_name' => 'Mark Johnson',
            'customer_image' => 'https://example.com/images/mark.jpg',
            'content' => 'Amazing quality, will definitely order again.',
        ]);
    }
}

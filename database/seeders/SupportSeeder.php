<?php

namespace Database\Seeders;

use App\Models\OfficeLocation;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Setting::create([
            'email' => 'support@klothink.com',
            'phone' => '+1 (555) 123-4567',
            'working_hours' => 'Available 24/7',
        ]);

        OfficeLocation::create([
            'city' => 'New York City, USA',
            'address' => '123 Fashion Avenue, Suite 456, New York, NY 10001',
            'phone' => '+1 (555) 123-4567',
            'direction_link' => 'https://maps.google.com/ny',
        ]);

        OfficeLocation::create([
            'city' => 'Paris, France',
            'address' => '789 Rue de la Mode, Paris 75001',
            'phone' => '+1 (555) 123-4567',
            'direction_link' => 'https://maps.google.com/paris',
        ]);

        OfficeLocation::create([
            'city' => 'Tokyo, Japan',
            'address' => '456 Shibuya Fashion Street, Shibuya-ku, Tokyo',
            'phone' => '+1 (555) 123-4567',
            'direction_link' => 'https://maps.google.com/tokyo',
        ]);
    }
}

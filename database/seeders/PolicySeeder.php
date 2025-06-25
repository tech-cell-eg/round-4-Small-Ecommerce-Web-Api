<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Policy::create([
            'title' => 'Privacy Policy',
            'content' => 'Your privacy is important to us. We do not share your personal information.',
        ]);

        Policy::create([
            'title' => 'Return Policy',
            'content' => 'You can return products within 14 days of purchase if they are in original condition.',
        ]);

        Policy::create([
            'title' => 'Terms of Service',
            'content' => 'By using our website, you agree to comply with our terms and conditions.',
        ]);
    }
}

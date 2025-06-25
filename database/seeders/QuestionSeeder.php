<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Question::create([
            'question' => 'How can I contact customer service?',
            'answer' => 'You can contact us via email at support@klothink.com or call us at +1 (555) 123-4567.',
        ]);

        Question::create([
            'question' => 'What are your working hours?',
            'answer' => 'We are available 24/7 to support our customers.',
        ]);

        Question::create([
            'question' => 'Where are your offices located?',
            'answer' => 'Our offices are located in New York, Paris, and Tokyo.',
        ]);
    }
}

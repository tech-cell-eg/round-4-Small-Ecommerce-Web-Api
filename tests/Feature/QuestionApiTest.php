<?php

namespace Tests\Feature;

use App\Models\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestionApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_retrieve_all_questions()
    {
        $question = Question::factory()->create();

        $response = $this->getJson('/api/questions');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'question' => $question->question,
                'answer' => $question->answer,
            ]);
    }
}

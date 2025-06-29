<?php

namespace Tests\Feature;

use App\Models\Policy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PolicyApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_retrieve_all_policies()
    {
        $policy = Policy::factory()->create();

        $response = $this->getJson('/api/policies');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'title' => $policy->title,
                'content' => $policy->content,
            ]);
    }
}

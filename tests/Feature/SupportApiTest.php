<?php

namespace Tests\Feature;

use App\Models\Setting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SupportApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_retrieve_support_data()
    {
        $support = Setting::factory()->create();

        $response = $this->getJson('/api/support');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'email' => $support->email,
                'phone' => $support->phone,
                'working_hours' => $support->working_hours,
            ]);
    }
}

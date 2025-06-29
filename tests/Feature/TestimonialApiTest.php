<?php

namespace Tests\Feature;

use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestimonialApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_retrieve_all_testimonials()
    {
        $testimonial = Testimonial::factory()->create();

        $response = $this->getJson('/api/testimonials');

        $response->assertStatus(200)
            ->assertJsonFragment([
                'customer_name' => $testimonial->customer_name,
                'content' => $testimonial->content,
            ]);
    }
}

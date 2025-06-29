<?php
namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductDetailsApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_retrieve_product_details()
    {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $response = $this->getJson('/api/products/' . $product->id);

        $response->assertStatus(200)
            ->assertJsonFragment([
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => (string) $product->price,
                'category' => $category->name,
            ]);
    }

    public function test_it_returns_404_if_product_not_found()
    {
        $response = $this->getJson('/api/products/999');

        $response->assertStatus(404);
    }
}

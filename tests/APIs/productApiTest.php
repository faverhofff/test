<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Product;
use Illuminate\Support\Arr;

class ProductApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_product()
    {
        $product = factory(Product::class)->make()->toArray();

        $product = Arr::only($product, ['name', 'description', 'price']);

        $this->response = $this->json(
            'POST',
            '/api/product', $product
        );

        $this->assertApiResponse($product);
    }

    /**
     * @test
     */
    public function test_read_product()
    {
        $product = factory(Product::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/product/'.$product->id
        );

        $this->assertApiResponse($product->toArray());
    }

    /**
     * @test
     */
    public function test_update_product()
    {
        $product = factory(Product::class)->create();
        $editedproduct = factory(Product::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/product/'.$product->id,
            $editedproduct
        );

        $this->assertApiResponse($editedproduct);
    }

    /**
     * @test
     */
    public function test_delete_product()
    {
        $product = factory(Product::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/product/'.$product->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/products/'.$product->id
        );

        $this->response->assertStatus(404);
    }
}

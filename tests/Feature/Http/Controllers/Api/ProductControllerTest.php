<?php

namespace Tests\Feature\Http\Controllers\Api;

use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;


class ProductControllerTest extends TestCase
{
    /* https://www.youtube.com/watch?v=qbh8Ogl_QcI */
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_a_product()
    {
        $faker = Factory::create();

        $response = $this->json('POST','/api/products',[
            'name' => $name =  $faker->company,
            'price' => $price = random_int(10,100)
        ]);
        $response->assertJsonStructure([
            'id','name','price','created_at'
        ])
        ->assertJson([
            'name' => $name,
            'price' => $price
        ])
        ->assertStatus(201);

        $this->assertDatabaseHas('products',[
            'name' => $name,
            'price' => $price
        ]);
    }
}

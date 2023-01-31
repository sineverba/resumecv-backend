<?php

namespace Tests\Feature\Controllers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class FrameworksControllerTest extends TestCase
{

    use DatabaseMigrations;
    use RefreshDatabase;

    public function test_can_index_zero_items()
    {
        $response = $this->get(Route('frameworks_index'));
        $response->assertStatus(200);
        $response->assertJson(fn (AssertableJson $json) => $json->has(0));
    }

    public function test_can_index_multiple_items()
    {
        $this->seed(DatabaseSeeder::class);
        $response = $this->get(Route('frameworks_index'));
        $response->assertStatus(200);
        $response->assertJson(fn (AssertableJson $json) =>
            $json
                ->has(1)
                ->first(fn ($json) =>
                    $json
                        ->where("id", 1)
                        ->where("name", "Laravel")
                        ->where("color", "#FF9655")
                        ->where("view_order", 1)
                        ->where("knowledge_percentage", 80)
                        ->etc()
                ));
    }
}

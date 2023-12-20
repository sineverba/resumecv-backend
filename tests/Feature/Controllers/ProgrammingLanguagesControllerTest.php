<?php

namespace Tests\Feature\Controllers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ProgrammingLanguagesControllerTest extends TestCase
{

    use DatabaseMigrations;

    public function test_can_index_zero_items()
    {
        $response = $this->get(Route('programming_languages_index'));
        $response->assertStatus(200);
        $response->assertJson(fn (AssertableJson $json) => $json->has(0));
    }

    public function test_can_index_multiple_items()
    {
        $this->seed(DatabaseSeeder::class);
        $response = $this->get(Route('programming_languages_index'));
        $response->assertStatus(200);
        $response->assertJson(fn (AssertableJson $json) =>
            $json
                ->has(1)
                ->first(fn ($json) =>
                    $json
                        ->where("id", 1)
                        ->where("name", "PHP")
                        ->where("view_order", 1)
                        ->where("knowledge_percentage", 95)
                        ->etc()
                ));
    }
}

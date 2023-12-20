<?php

namespace Tests\Unit\Repositories;

use App\Repositories\ProgrammingLanguagesRepository;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProgrammingLanguagesRepositoryTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test can instantiate the class
     * @return void
     */
    public function test_can_instantiate_the_class(): void
    {
        $repository = new ProgrammingLanguagesRepository();
        $this->assertInstanceOf("App\Repositories\ProgrammingLanguagesRepository", $repository);
    }

    /**
     * Test can return 0 items if no data is present in database
     * @return void
     */
    public function test_can_index_with_no_data(): void
    {
        $repository = new ProgrammingLanguagesRepository();
        $items = $repository->index();
        $this->assertCount(0, $items);
    }

    /**
     * Test can index and return items
     * @return void
     */
    public function test_can_index(): void
    {
        $this->seed(DatabaseSeeder::class);
        $repository = new ProgrammingLanguagesRepository();
        $items = $repository->index();
        $this->assertCount(1, $items);
        $this->assertEquals("PHP", $items[0]->name);
        $this->assertEquals("95", $items[0]->knowledge_percentage);
    }
}

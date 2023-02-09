<?php

namespace Tests\Unit\Repositories;

use App\Repositories\WorkingModeRepository;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WorkingModeRepositoryTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    /**
     * Test can instantiate the class
     * @return void
     */
    public function test_can_instantiate_the_class(): void
    {
        $repository = new WorkingModeRepository();
        $this->assertInstanceOf("App\Repositories\WorkingModeRepository", $repository);
    }

    /**
     * Test can return 0 items if no data is present in database
     * @return void
     */
    public function test_can_index_with_no_data(): void
    {
        $repository = new WorkingModeRepository();
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
        $repository = new WorkingModeRepository();
        $items = $repository->index();
        $this->assertCount(1, $items);
        $this->assertEquals("Test Drive Development", $items[0]->name);
        $this->assertEquals("1", $items[0]->view_order);
    }
}

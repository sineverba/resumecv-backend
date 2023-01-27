<?php

namespace Tests\Unit\Repositories;

use App\Repositories\DatabasesRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabasesRepositoryTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    /**
     * Test can instantiate the class
     * @return void
     */
    public function test_can_instantiate_the_class(): void
    {
        $repository = new DatabasesRepository();
        $this->assertInstanceOf("App\Repositories\DatabasesRepository", $repository);
    }

    /**
     * Test can return 0 items if no data is present in database
     * @return void
     */
    public function test_can_index_with_no_data(): void
    {
        $repository = new DatabasesRepository();
        $items = $repository->index();
        $this->assertCount(0, $items);
    }
}

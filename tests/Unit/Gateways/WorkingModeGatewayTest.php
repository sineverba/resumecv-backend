<?php

namespace Tests\Unit\Gateways;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WorkingModeGatewayTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    private $gateway = "App\Gateways\WorkingModeGateway";

    private function getGateway(): string
    {
        return $this->gateway;
    }

    /**
     * Test can instantiate class
     * @return void
     */
    public function test_can_instantiate_class(): void
    {
        $gateway = $this->app->make($this->getGateway());
        $this->assertInstanceOf($this->getGateway(), $gateway);
    }

    /**
     * Test can index
     * @return void
     */
    public function test_can_index_zero_items(): void
    {
        $gateway = $this->app->make($this->getGateway());
        $items = $gateway->index();
        $this->assertCount(0, $items);
    }

    /**
     * Test can index multiple items
     * @return void
     */
    public function test_can_index_multiple_items(): void
    {
        $this->seed(DatabaseSeeder::class);
        $gateway = $this->app->make($this->getGateway());
        $items = $gateway->index();
        $this->assertCount(1, $items);
    }
}

<?php

namespace Tests\Unit\Gateways;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabasesGatewayTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    private $gateway = "App\Gateways\DatabasesGateway";

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
}

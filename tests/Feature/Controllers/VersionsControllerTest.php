<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;

class VersionsControllerTest extends TestCase
{
    public function test_can_return_version()
    {
        $response = $this->get(Route('versions_index'));
        $response->assertStatus(200);
        $response->assertJson([
            "version" => "9.8.7"
        ]);
    }
}

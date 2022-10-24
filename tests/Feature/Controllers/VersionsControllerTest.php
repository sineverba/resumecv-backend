<?php

namespace Tests\Feature\Controllers;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class VersionsControllerTest extends TestCase
{
    public function test_can_return_ok()
    {
        $response = $this->get(Route('versions_index'));
        $response->assertStatus(200);
        $response->assertContent("ok");
    }
}

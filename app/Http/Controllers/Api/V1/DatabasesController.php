<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\DatabasesGateway;
use App\Http\Controllers\Api\ApiController;

class DatabasesController extends ApiController
{
    public function __construct(DatabasesGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

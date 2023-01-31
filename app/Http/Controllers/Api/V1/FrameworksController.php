<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\FrameworksGateway;
use App\Http\Controllers\Api\ApiController;

class FrameworksController extends ApiController
{
    public function __construct(FrameworksGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

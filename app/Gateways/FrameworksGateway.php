<?php

namespace App\Gateways;

use App\Interfaces\FrameworksInterface;

class FrameworksGateway extends Gateway
{
    public function __construct(FrameworksInterface $interface)
    {
        $this->setInterface($interface);
    }
}

<?php

namespace App\Gateways;

use App\Interfaces\DatabasesInterface;

class DatabasesGateway extends Gateway
{
    public function __construct(DatabasesInterface $interface)
    {
        $this->setInterface($interface);
    }
}

<?php

namespace App\Gateways;

use App\Interfaces\WorkingModeInterface;

class WorkingModeGateway extends Gateway
{
    public function __construct(WorkingModeInterface $interface)
    {
        $this->setInterface($interface);
    }
}

<?php

namespace App\Gateways;

use App\Interfaces\ToolsInterface;

class ToolsGateway extends Gateway
{
    public function __construct(ToolsInterface $interface)
    {
        $this->setInterface($interface);
    }
}

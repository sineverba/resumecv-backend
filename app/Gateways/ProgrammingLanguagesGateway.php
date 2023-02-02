<?php

namespace App\Gateways;

use App\Interfaces\ProgrammingLanguagesInterface;

class ProgrammingLanguagesGateway extends Gateway
{
    public function __construct(ProgrammingLanguagesInterface $interface)
    {
        $this->setInterface($interface);
    }
}

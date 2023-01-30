<?php

namespace App\Gateways;

class Gateway
{
    private $interface;

    protected function setInterface($interface)
    {
        $this->interface = $interface;
    }

    private function getInterface()
    {
        return $this->interface;
    }

    public function index()
    {
        return $this->getInterface()->index();
    }
}

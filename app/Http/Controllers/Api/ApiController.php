<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * @OA\Info(
     *      version=APP_VERSION,
     *      title="Resume CV",
     *      description="Laravel based backend for an online resume",
     *      @OA\Contact(
     *          email="info@example.com"
     *      ),
     *      @OA\License(
     *          name="MIT"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Api Server"
     * )
     *
     */
    private $gateway;

    protected function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    private function getGateway()
    {
        return $this->gateway;
    }

    protected function index()
    {
        return $this->getGateway()->index();
    }
}

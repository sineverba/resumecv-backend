<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\FrameworksGateway;
use App\Http\Controllers\Api\ApiController;

class FrameworksController extends ApiController
{
    /**
     * @OA\Get(
     *   path="/api/v1/frameworks",
     *   summary="Return list of frameworks used by developer",
     *   tags={"Frameworks"},
     *    @OA\Response(
     *      response=200,
     *      description="List of frameworks used by developer",
     *      @OA\JsonContent(ref="#/components/schemas/FrameworksSchema")
     *    )
     * )
     */
    public function __construct(FrameworksGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

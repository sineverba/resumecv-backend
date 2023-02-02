<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\DatabasesGateway;
use App\Http\Controllers\Api\ApiController;

class DatabasesController extends ApiController
{
    /**
     * @OA\Get(
     *   path="/api/v1/databases",
     *   summary="Return list of databases used by developer",
     *   tags={"Databases"},
     *    @OA\Response(
     *      response=200,
     *      description="List of databases used by developer",
     *      @OA\JsonContent(ref="#/components/schemas/DatabasesSchema")
     *    )
     * )
     */
    public function __construct(DatabasesGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

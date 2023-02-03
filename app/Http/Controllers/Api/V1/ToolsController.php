<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\ToolsGateway;
use App\Http\Controllers\Api\ApiController;

class ToolsController extends ApiController
{
    /**
     * @OA\Get(
     *   path="/api/v1/tools",
     *   summary="Return list of tools used by developer",
     *   tags={"ToolsAndTechnologies"},
     *    @OA\Response(
     *      response=200,
     *      description="List of tools used by developer",
     *      @OA\JsonContent(ref="#/components/schemas/ToolsAndTechnologiesSchema")
     *    )
     * )
     */
    public function __construct(ToolsGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

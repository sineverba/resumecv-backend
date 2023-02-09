<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\WorkingModeGateway;
use App\Http\Controllers\Api\ApiController;

class WorkingModeController extends ApiController
{
    /**
     * @OA\Get(
     *   path="/api/v1/working-mode",
     *   summary="Working mode",
     *   tags={"WorkingMode"},
     *    @OA\Response(
     *      response=200,
     *      description="Working Mode",
     *      @OA\JsonContent(ref="#/components/schemas/WorkingModeSchema")
     *    )
     * )
     */
    public function __construct(WorkingModeGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

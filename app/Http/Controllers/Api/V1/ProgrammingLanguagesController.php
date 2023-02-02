<?php

namespace App\Http\Controllers\Api\V1;

use App\Gateways\ProgrammingLanguagesGateway;
use App\Http\Controllers\Api\ApiController;

class ProgrammingLanguagesController extends ApiController
{
    /**
     * @OA\Get(
     *   path="/api/v1/programming-languages",
     *   summary="Return list of programming languages used by developer",
     *   tags={"ProgrammingLangauges"},
     *    @OA\Response(
     *      response=200,
     *      description="List of programming languages used by developer",
     *      @OA\JsonContent(ref="#/components/schemas/ProgrammingLanguagesSchema")
     *    )
     * )
     */
    public function __construct(ProgrammingLanguagesGateway $gateway)
    {
        $this->setGateway($gateway);
    }
}

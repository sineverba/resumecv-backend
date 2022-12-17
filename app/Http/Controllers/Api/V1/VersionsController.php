<?php

namespace App\Http\Controllers\Api\V1;

class VersionsController
{
    /**
     *
     * Return the current version of the APP
     *
     * @return string
     */
    public function index(): array|string
    {
        return [
            'version' => env('APP_VERSION', '0.0.0')
        ];
    }
}

<?php

namespace App\Providers;

use App\Interfaces\DatabasesInterface;
use App\Repositories\DatabasesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            DatabasesInterface::class,
            DatabasesRepository::class,
        );
    }
}

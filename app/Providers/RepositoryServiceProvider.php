<?php

namespace App\Providers;

use App\Interfaces\DatabasesInterface;
use App\Interfaces\FrameworksInterface;
use App\Repositories\DatabasesRepository;
use App\Repositories\FrameworksRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            DatabasesInterface::class,
            DatabasesRepository::class,
        );
        $this->app->bind(
            FrameworksInterface::class,
            FrameworksRepository::class,
        );
    }
}

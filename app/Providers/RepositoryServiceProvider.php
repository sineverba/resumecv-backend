<?php

namespace App\Providers;

use App\Interfaces\DatabasesInterface;
use App\Interfaces\FrameworksInterface;
use App\Interfaces\ProgrammingLanguagesInterface;
use App\Interfaces\ToolsInterface;
use App\Interfaces\WorkingModeInterface;
use App\Repositories\DatabasesRepository;
use App\Repositories\FrameworksRepository;
use App\Repositories\ProgrammingLanguagesRepository;
use App\Repositories\ToolsRepository;
use App\Repositories\WorkingModeRepository;
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
        $this->app->bind(
            ProgrammingLanguagesInterface::class,
            ProgrammingLanguagesRepository::class,
        );
        $this->app->bind(
            ToolsInterface::class,
            ToolsRepository::class,
        );
        $this->app->bind(
            WorkingModeInterface::class,
            WorkingModeRepository::class,
        );
    }
}

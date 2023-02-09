<?php

namespace Database\Seeders;

use App\Repositories\DatabasesRepository;
use App\Repositories\FrameworksRepository;
use App\Repositories\ProgrammingLanguagesRepository;
use App\Repositories\ToolsRepository;
use App\Repositories\WorkingModeRepository;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DatabasesRepository::factory()->create();
        FrameworksRepository::factory()->create();
        ProgrammingLanguagesRepository::factory()->create();
        ToolsRepository::factory()->create();
        WorkingModeRepository::factory()->create();
    }
}

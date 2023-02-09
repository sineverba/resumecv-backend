<?php

namespace Database\Factories\Repositories;

use App\Repositories\WorkingModeRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkingModeRepositoryFactory extends Factory
{

    protected $model = WorkingModeRepository::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => "Test Drive Development",
            "view_order" => 1,
        ];
    }
}

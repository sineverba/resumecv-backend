<?php

namespace Database\Factories\Repositories;

use App\Repositories\ToolsRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class ToolsRepositoryFactory extends Factory
{

    protected $model = ToolsRepository::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => "Docker",
            "view_order" => 1,
            "use_percentage" => 90,
        ];
    }
}

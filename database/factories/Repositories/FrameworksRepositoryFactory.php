<?php

namespace Database\Factories\Repositories;

use App\Repositories\FrameworksRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class FrameworksRepositoryFactory extends Factory
{

    protected $model = FrameworksRepository::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => "Laravel",
            "view_order" => 1,
            "knowledge_percentage" => 80,
            "color" => "#FF9655",
        ];
    }
}

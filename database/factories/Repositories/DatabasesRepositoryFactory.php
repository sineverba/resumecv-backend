<?php

namespace Database\Factories\Repositories;

use App\Repositories\DatabasesRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabasesRepositoryFactory extends Factory
{

    protected $model = DatabasesRepository::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "database_name" => "MySQL",
            "view_order" => 1,
            "use_percentage" => 40,
        ];
    }
}

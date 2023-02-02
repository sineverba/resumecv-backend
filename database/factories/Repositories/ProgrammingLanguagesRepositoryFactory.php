<?php

namespace Database\Factories\Repositories;

use App\Repositories\ProgrammingLanguagesRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammingLanguagesRepositoryFactory extends Factory
{

    protected $model = ProgrammingLanguagesRepository::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => "PHP",
            "view_order" => 1,
            "knowledge_percentage" => 95,
        ];
    }
}

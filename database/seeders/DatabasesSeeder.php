<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasesSeeder extends Seeder
{
    private string $table_name = "databases";

    private function getTableName(): string
    {
        return $this->table_name;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->getTableName()->insert(
            [
                "database_name" => "Oracle",
                "view_order" => 1,
                "use_percentage" => 40,
            ],
            [
                "database_name" => "MySql",
                "view_order" => 2,
                "use_percentage" => 50,
            ]));
    }
}

<?php

namespace App\Repositories;

use App\Interfaces\DatabasesInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DatabasesRepository extends Repository implements DatabasesInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "databases";
}

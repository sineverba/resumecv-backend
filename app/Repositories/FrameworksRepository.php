<?php

namespace App\Repositories;

use App\Interfaces\FrameworksInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FrameworksRepository extends Repository implements FrameworksInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "frameworks";
}

<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabasesRepository extends Model
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "databases";

    /**
     * Return all data.
     *
     * @return mixed
     */
    public function index()
    {
        return $this->get();
    }
}

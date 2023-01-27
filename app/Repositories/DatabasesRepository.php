<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class DatabasesRepository extends Model
{
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

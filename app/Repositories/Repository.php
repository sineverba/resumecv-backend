<?php

namespace App\Repositories;

use App\Interfaces\DatabasesInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
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

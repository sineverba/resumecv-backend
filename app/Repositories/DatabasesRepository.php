<?php

namespace App\Repositories;

use App\Interfaces\DatabasesInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *   schema="DatabasesSchema",
 *   title="Databases",
 *   description="Databases model",
 *   @OA\Property(
 *          property="data",
 *          description="List of databases",
 *          type="array",
 *          @OA\Items(
 *               @OA\Property(
 *                  property="id", description="ID of the database", type="number", example=1
 *               ),
 *               @OA\Property(
 *                  property="database_name", description="Name of the database", type="string", example="MySQL"
 *               ),
 *               @OA\Property(
 *                  property="view_order", description="Suggested order of visualization", type="number", example="1"
 *               ),
 *               @OA\Property(
 *                  property="created_at", description="Date of creation", type="string", example="2023-01-29"
 *               ),
 *               @OA\Property(
 *                  property="updated_at", description="Date of update", type="string", example="2023-01-29"
 *               ),
 *               @OA\Property(
 *                  property="deleted_at", description="Date of deletion", type="string", example="2023-01-29"
 *               ),
 *          ),
 *   ),
 * )
 *
 */

class DatabasesRepository extends Repository implements DatabasesInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "databases";
}

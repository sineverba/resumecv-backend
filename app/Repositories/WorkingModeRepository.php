<?php

namespace App\Repositories;

use App\Interfaces\WorkingModeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *   schema="WorkingModeSchema",
 *   title="Working Mode",
 *   description="Working Mode model",
 *   @OA\Property(
 *          property="data",
 *          description="Working Mode",
 *          type="array",
 *          @OA\Items(
 *               @OA\Property(
 *                  property="id", description="ID of the mode", type="number", example=1
 *               ),
 *               @OA\Property(
 *                  property="name", description="Name", type="string", example="Test Drive Development"
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

class WorkingModeRepository extends Repository implements WorkingModeInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "working_mode";
}

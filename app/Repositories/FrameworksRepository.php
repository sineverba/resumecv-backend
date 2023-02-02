<?php

namespace App\Repositories;

use App\Interfaces\FrameworksInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *   schema="FrameworksSchema",
 *   title="Frameworks",
 *   description="Frameworks model",
 *   @OA\Property(
 *          property="data",
 *          description="List of frameworks",
 *          type="array",
 *          @OA\Items(
 *               @OA\Property(
 *                  property="id", description="ID of the framework", type="number", example=1
 *               ),
 *               @OA\Property(
 *                  property="name", description="Name of the framework", type="string", example="MySQL"
 *               ),
 *               @OA\Property(
 *                  property="view_order", description="Suggested order of visualization", type="number", example="1"
 *               ),
 *               @OA\Property(
 *                  property="knowledge_percentage", description="Percentage of knowledge", type="number", example="20"
 *               ),
 *               @OA\Property(
 *                  property="color", description="Suggested color", type="string", example="#FFFFFF"
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

class FrameworksRepository extends Repository implements FrameworksInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "frameworks";
}

<?php

namespace App\Repositories;

use App\Interfaces\ToolsInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *   schema="ToolsAndTechnologiesSchema",
 *   title="ToolsAndTechnologies",
 *   description="Tools and technologies model",
 *   @OA\Property(
 *          property="data",
 *          description="List of tools and technologies",
 *          type="array",
 *          @OA\Items(
 *               @OA\Property(
 *                  property="id", description="ID of the tool", type="number", example=1
 *               ),
 *               @OA\Property(
 *                  property="name", description="Name of the tool", type="string", example="Docker"
 *               ),
 *               @OA\Property(
 *                  property="view_order", description="Suggested order of visualization", type="number", example="1"
 *               ),
 *               @OA\Property(
 *                  property="use_percentage", description="Percentage of use", type="number", example="90"
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

class ToolsRepository extends Repository implements ToolsInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "tools";
}

<?php

namespace App\Repositories;

use App\Interfaces\ProgrammingLanguagesInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @OA\Schema(
 *   schema="ProgrammingLanguagesSchema",
 *   title="Programming Languages",
 *   description="Programming Languages model",
 *   @OA\Property(
 *          property="data",
 *          description="List of programming languages",
 *          type="array",
 *          @OA\Items(
 *               @OA\Property(
 *                  property="id", description="ID of the language", type="number", example=1
 *               ),
 *               @OA\Property(
 *                  property="name", description="Name of the language", type="string", example="PHP"
 *               ),
 *               @OA\Property(
 *                  property="view_order", description="Suggested order of visualization", type="number", example="1"
 *               ),
 *               @OA\Property(
 *                  property="knowledge_percentage", description="Percentage of knowledge", type="number", example="95"
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

class ProgrammingLanguagesRepository extends Repository implements ProgrammingLanguagesInterface
{
    use HasFactory;

    /**
     * The table name.
     * @var string
     */
    protected $table = "programming_languages";
}

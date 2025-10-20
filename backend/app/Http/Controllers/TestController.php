<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/test",
     *     summary="Перевірка роботи API",
     *     tags={"Test"},
     *     @OA\Response(
     *         response=200,
     *         description="API працює",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="API is working!")
     *         )
     *     )
     * )
     */
    public function test()
    {
        return response()->json(['message' => 'API is working!']);
    }
}

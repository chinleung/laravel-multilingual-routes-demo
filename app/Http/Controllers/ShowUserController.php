<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, User $user): JsonResponse
    {
        return response()->json([
            'locale' => app()->getLocale(),
            'user' => $user,
        ]);
    }
}

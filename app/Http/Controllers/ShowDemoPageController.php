<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ShowDemoPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'locale' => app()->getLocale(),
            'routes' => collect(Route::getRoutes()->getRoutesByName())
                ->map(fn ($route) => $route->uri),
        ]);
    }
}

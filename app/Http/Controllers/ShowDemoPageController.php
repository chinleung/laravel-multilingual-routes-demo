<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ShowDemoPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return response()->json([
            'locale' => locale(),
            'routes' => collect(Route::getRoutes()->getRoutesByName())
                ->filter(function ($value, $key) {
                    return strpos($key, 'ignition.') === false;
                })->map(function ($route) {
                    return $route->uri;
                }),
        ]);
    }
}

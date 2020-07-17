<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $user)
    {
        return response()->json([
            'locale' => locale(),
            'user' => $user,
        ]);
    }
}

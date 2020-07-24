<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterFormRequest;
use App\User;

class RegisterController extends Controller
{
    public function signup(RegisterFormRequest $request)
    {
        try {
            User::create(
                [
                    'username' => $request->json('username'),
                    'email' => $request->json('email'),
                    'password' => password_hash($request->json('password'), PASSWORD_BCRYPT)
                ]
            );
        }
        catch(\Exception $e) {
            return response()->json(['data' => ['error' => $e->getMessage()]], 500);
        }

    }
}

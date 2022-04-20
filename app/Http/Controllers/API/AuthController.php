<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\UserRequest;
use App\Traits\ApiResponse;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    use ApiResponse;

    public function register(UserRequest $request) {
        $validated = $request->validated();

        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        $access_token = $user->createToken('authToken')->accessToken;

        return $this->successResponse([
            'user' => $user,
            'access_token' => $access_token
        ], 201);
    }

    public function login(Request $request) {
        $loginValidated = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($loginValidated)) {
            return $this->errorResponse([], 'Invalid credentials', 'Invalid credentials', Response::HTTP_UNAUTHORIZED);
        }

        $access_token = auth()->user()->createToken('authToken')->accessToken;

        return $this->successResponse([
            'user' => auth()->user(),
            'access_token' => $access_token
        ]);
    }
}

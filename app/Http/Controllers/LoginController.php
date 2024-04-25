<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Resources\UserResource;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        return response($request);
        if (Auth::attempt($request->validated())) {
            return ['token' => $request->user()->createToken('auth_token')->plainTextToken];
        }
        return response()->json(['errors' => ['general' => 'E-Mail oder Passwort falsch.']], 422);
    }

    public function checkauth(Request $request)
    {
        return UserResource::make($request->user());
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message'=>'logged out!'], 200);
    }
}

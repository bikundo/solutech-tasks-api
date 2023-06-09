<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Http\Responses\LoginResponse;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($fields)) {

            $user = User::where('email', $fields['email'])->first();

            $token = $user->createToken('login_token')->plainTextToken;

            if (!$user || !Hash::check($fields['password'], $user->password)) {
                return response([
                    'message' => 'Invalid Login Credentials',
                ], 401);
            }

            $response = [
                'user'  => $user,
                'token' => $token,
            ];

            return response($response);
        }

        $response = ["message" => 'User does not exist'];

        return response($response, 422);
    }
}

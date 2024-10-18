<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginApiRequest;
use App\Http\Requests\RegisterApiRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(RegisterApiRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['unhashed_password'] = $validatedData['password'];
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $token = $user->createToken('token')->plainTextToken;
        return new LoginResource([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function login(LoginApiRequest $request)
    {
        $validatedData = $request->validated();

        //check user base on email
        $user = User::where('email', $validatedData['email'])->first();
        if (!$user) {
            throw ValidationException::withMessages([
                'email' => ['Email tidak sesuai'],
            ]);
        }

        //Alert For Wrong Password
        if (!Hash::check($validatedData['password'], $user->password)) {
            throw ValidationException::withMessages(['password' => ['Password tidak sesuai'],]);
        }

        //Delete Old Token and Generate New One
        $user->tokens()->delete();
        $token = $user->createToken('token')->plainTextToken;

        return new LoginResource([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request) {
        //delete all token related to the current user
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout Success'
        ]);
    }
}

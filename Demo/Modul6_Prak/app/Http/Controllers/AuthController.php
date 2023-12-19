<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        try {
            $queryData = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
            ]);
            $token = $queryData->createToken('auth_token')->plainTextToken;

            return response()->json([
                "message" => "success",
                "token" => $token,
                "data" => $queryData
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(LoginRequest $request)
    {
        try {
            $user = User::where("email", $request->email)->first();
            if ($user) {
                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    "message" => "Success",
                    "token_type" => "Bearer",
                    "access_token" => $token,
                    "data" => $user
                ], 200);
            } else {
                return response()->json([
                    "message" => "Failed",
                ], 400);
            }
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

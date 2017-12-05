<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use JWTAuth;
use JWTAuthException;
use App\User;

class ApiController extends Controller
{

    public function __construct()
    {
        $this->user = new User;
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'email', 'password');
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'response' => 'Error',
                    'message' => 'Invalid email or password.',
                ]);
            }
        } catch (JWTAuthException $e) {
            return response()->json([
                'response' => 'Error',
                'message' => 'Failed to create token.',
            ]);
        }
        return response()->json([
            'response' => 'Success',
            'result' => [
                'token' => $token,
            ],
        ]);
    }

    public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }

}
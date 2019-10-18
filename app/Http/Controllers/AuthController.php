<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\RegisterAuthRequest;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public $loginAfterSignUp = true;

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            return $this->login($request);
        }

        return response()->json([
            'status' => 'ok',
            'data' => $user
        ], 200);
    }

    public function login(Request $request){
        $input = $request->only('email', 'password');
        $jwt_token = null;

        if(!$jwt_token = JWTAuth::attempt($input)){
            return response()->json([
                'status' => 'invalid credentials',
                'message' => 'Correo o contraseña inválidos.',
            ], 401);
        }

        return response()->json([
            'status' => 'ok',
            'token' => $jwt_token,
        ]);
    }

    public function logout(Request $request) {
        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);
            return response()->json([
                'status' => 'ok',
                'message' => 'Al usuario no se le pudo cerrar la sesión'
            ], 500);
        } catch (JWTException $exception ) {
            return response()->json([
                'status' => 'unknown_error',
                'message' => 'Al usuario no se le ha podido cerrar la sesión'
            ], 500);
        }
    }

    public function getAuthUser (Request $request){
        $this->validate($request, [
            'token' => 'required'
        ]);

        $user = JSWTAuth::authenticate($request->token);
        return response()->json(['user' => $user]);
    }
}

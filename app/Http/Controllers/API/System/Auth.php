<?php

namespace App\Http\Controllers\API\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\Auth as Request;

use App\Models\System\UserModel;

class Auth extends Controller
{
  public function login(Request $request) {
    try {
      if(!auth()->attempt($request->only('email', 'password')))
        throw new \Exception();
        
      $user = auth()->user()->load('status');
      $permissions = $user->admin 
        ? ['*'] 
        : $user->roles->flatMap(fn($role) => $role->permissions
          ->pluck('name'))->unique()->values()->all();
      $token = $user->createToken('api', $permissions, now()->addMinutes(10));

      return [ 
        'user' => $user, 
        'token' => $token 
      ];

    } catch (\Exception $e) {
      return response()->json([ 'message' => 'Não foi possível fazer login' ], 401);
    }
  }

  public function me() {
    try {
      $user = auth()->user()->load('status');
      if(!$user)
        throw new \Exception();

      return [ 
        'user' => $user
      ];

    } catch (\Exception $e) {
      return response()->json([ 'message' => 'Não autenticado' ], 401);
    }
  }

  public function refresh() {
    try {
      $token = request()->bearerToken();
      if (!$token) 
        throw new \Exception();

      $personalAccessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
      if (!$personalAccessToken)
          throw new \Exception();
  
      $user = $personalAccessToken->tokenable;
      $personalAccessToken->delete();

      $permissions = $user->admin 
          ? ['*'] 
          : $user->roles->flatMap(fn($role) => $role->permissions->pluck('name'))
              ->unique()->values()->all();

      $token = $user->createToken('api', $permissions, now()->addMinutes(10));

      return [
        'token' => $token
      ];

    } catch (\Exception $e) {
      return response()->json([ 'message' => 'Não autenticado' ], 401);
    }
  }
  
  public function logout() {
   try {
      $user = auth()->user();
      if(!$user)
        throw new \Exception();

      $user->currentAccessToken()->delete();
      return [ 'message' => 'Logout realizado com sucesso' ];

    } catch (\Exception $e) {
      return response()->json([ 'message' => 'Não autenticado' ], 401);
    }
  }
}

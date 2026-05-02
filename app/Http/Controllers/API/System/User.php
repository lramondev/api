<?php

namespace App\Http\Controllers\API\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\User as Request;

use App\Models\System\User as UserModel;
use App\Models\System\UserRole as UserRoleModel;

class User extends Controller
{
  public function page() {
    return UserModel::with([ 
      'roles:id,name,description', 
      'roles.permissions:id,name,description' 
    ])->with('status')
    ->paginate(20);
  }

  public function get() {
    return UserModel::with([ 
      'roles:id,name,description', 
      'roles.permissions:id,name,description' 
    ])->with('status')
    ->first();
  }

  public function create(Request $request) {
    try {
      $this->save($request);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function update(Request $request) {
    try {
      $id = $request->input('id');
      $this->save($request, $id);
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function cancel(Request $request) {
    try {
      $id = $request->input('id');
      
      $user = UserModel::where('id', $id)
        ->first();

      $user->status_id = 3;
      $user->save();
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function remove(Request $request) {
    try {
      $id = $request->input('id');

      UserRoleModel::where('user_id', $id)
        ->delete();
      UserModel::where('id', $id)
        ->delete();
 
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  private function save(Request $request, $id = null) {
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $roles = (object) $request->input('roles');

    $picture = $request->file('picture')
      ->store('users/pictures', 'public');

    $user = UserModel::where('id', $id)
      ->first() ?: new UserModel;

    $user->name = $name;
    $user->email = $email;
    $user->password = $password;
    $user->picture = $picture;
    $user->save();

    foreach($roles as $role) {
      $user_role = new UserRoleModel;
      $user_role->user_id = $user->id;
      $user_role->role_id = $role->id;
      $user_role->save();
    }
  }
}
<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;
  
  const CREATED_AT = null;
  const UPDATED_AT = null;

  protected $table = 'system.users';

  protected $fillable = [
    'name',
    'email',
    'password',
    'admin'
  ];

  protected $hidden = [
    'password',
    'remember_token',
    'status_id'
  ];

  protected $casts = [
    'id' => 'integer',
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
    'admin' => 'boolean'
  ];

  public function roles() {
    return $this->belongsToMany(Role::class, 'system.users_roles');
  }

  public function hasRole($role) {
    return $this->roles->contains('name', $role);
  }

  public function status() {
    return $this->hasOne(Status::class, 'id', 'status_id');
  }

  public function getPictureAttribute($value) {
    return $value ? asset('storage/' . $value) : null;
  }
}

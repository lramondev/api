<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  const CREATED_AT = null;
  const UPDATED_AT = null;

  protected $table = 'system.roles';

  protected $fillable = [
    'id',
    'name',
    'description'
  ];

  protected $hidden = [
    'status_id',
    'pivot'
  ];

  protected $casts = [
    'id' => 'integer'
  ];

  public function users() {
    return $this->belongsToMany(User::class, 'system.users_roles');
  }

  public function permissions() {
    return $this->belongsToMany(Permission::class, 'system.roles_permissions');
  }
  
  public function hasPermission($permission) {
    return $this->permissions->contains('name', $permission);
  }

  public function status() {
    return $this->hasOne(Status::class, 'id', 'status_id');
  }
}

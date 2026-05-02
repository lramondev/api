<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  use HasFactory;

  const CREATED_AT = null;
  const UPDATED_AT = null;

  protected $table = 'system.permissions';

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

  public function roles() {
    return $this->belongsToMany(Role::class, 'system.roles_permissions');
  }

  public function status() {
    return $this->hasOne(Status::class, 'id', 'status_id');
  }
}

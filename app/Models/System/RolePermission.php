<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
  use HasFactory;

  protected $table = 'system.roles_permissions';

  protected $fillable = [

  ];

  protected $hidden = [
    'role_id',
    'permission_id'
  ];

  protected $casts = [
    'id' => 'integer'
  ];

}

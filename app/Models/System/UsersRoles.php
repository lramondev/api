<?php

namespace App\Models\System;

use App\Models\AbastractModel;

class UsersRoles extends AbastractModel
{
  protected $table = 'system.users_roles';

  protected $fillable = [
    'start_datetime',
    'end_datetime'
  ];

  protected $hidden = [
    'user_id',
    'role_id'
  ];

  protected $casts = [
    'id' => 'integer',
    'start_datetime' => 'datetime:Y-m-d\TH:i:sP',
    'end_datetime' => 'datetime:Y-m-d\TH:i:sP'
  ];
}

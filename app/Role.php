<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id_role';

    protected $fillable = [
        'id_role',
        'role_name',
    ];
}

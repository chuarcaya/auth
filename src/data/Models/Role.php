<?php

namespace Ecommerce\Auth\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    protected $fillable = [
        'id','title'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

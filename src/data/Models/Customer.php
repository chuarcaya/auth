<?php

namespace Ecommerce\Auth\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = [
        'doc_number', 'firstname', 'lastname', 'phone_number', 'sex', 'genero_desc'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkWithUs extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'role',
        'cv_path',
        'statement_path',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'hire_date',
        'salary',
        'phone',
        'email',
        'rfc',
        'birthday',
        'branch_id',
    ];

}

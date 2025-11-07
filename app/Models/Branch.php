<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone'
    ];

    public function emlpioyes(): HasMany {
        return $this->hasMany(Employe::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone'
    ];

    public function employes(): HasMany {
        return $this->hasMany(Employe::class);
    }
}

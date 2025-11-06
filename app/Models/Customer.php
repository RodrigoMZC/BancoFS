<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'address',
        'email',
        'birthday',
        'rfc',
    ];

    public function accounts(): HasMany {
        return $this->hasMany(Account::class);
    }


}

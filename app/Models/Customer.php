<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'address',
        'email',
        'birtday',
        'rfc',
    ];

    public function accounts(): BelongsToMany {
        return $this->belongsToMany(Account::class, 'customers_accounts')->withPivot('role');
    }


}

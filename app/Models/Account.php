<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Account extends Model
{
    protected $fillable = [
    'type',
    'balance',
    'date_opened',
    'status'
];

    public function customers(): BelongsToMany {
        return $this->belongsToMany(Account::class, 'customers_accounts')->withPivot('role');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'account_type',
        'balance',
        'date_opened',
        'status'
    ];

    public function customers(): BelongsTo {
        return $this->belongsTo(Account::class);
    }
}

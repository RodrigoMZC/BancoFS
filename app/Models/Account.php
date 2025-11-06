<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Customer;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'type',
        'balance',
        'date_opened',
        'status'
    ];

    /**
     * Cuenta pertenece a un cliente.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

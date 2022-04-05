<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string[]
     */
    protected $fillable = [
        'number', 'name', 'email', 'phone_number', 'address', 'city', 'province', 'zip_code', 'pay_amount', 'status'
    ];

    /**
     * @var array
     */
    protected $hidden = [];

    const status = [
        'pending' => 'PENDING',
        'approve' => 'APPROVE',
        'sending' => 'SENDING',
        'success' => 'SUCCESS',
        'failed' => 'FAILED',
    ];

    /**
     * Transaction has many transaction details.
     */
    public function transactionDetails(): HasMany
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }
}

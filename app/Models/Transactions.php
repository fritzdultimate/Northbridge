<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'user_id',
        'beneficiary_id',
        'amount',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
        'type',
        'sender_balance',
        'beneficiary_balance'
    ];

    public function sender() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function beneficiary() {
        return $this->belongsTo(User::class, 'beneficiary_id');
    }
}

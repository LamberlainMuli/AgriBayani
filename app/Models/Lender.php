<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    protected $fillable = [
        'amount_lended', 'account_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
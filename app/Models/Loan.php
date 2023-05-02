<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'borrower_id', 'lender_id', 'amount_loaned', 'amount_paid', 'is_fully_paid', 'interest', 'amount_to_pay_total'
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }

    public function lender()
    {
        return $this->belongsTo(Lender::class);
    }
}

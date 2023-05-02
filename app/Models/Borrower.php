<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = [
        'description', 'goal_amount', 'amount_received', 'account_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

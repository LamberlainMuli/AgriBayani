<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Account extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $fillable = ['email', 'picture_url', 'first_name', 'last_name', 'phone_number', 'location','password', 'is_borrower'];

    public function lender()
    {
        return $this->hasOne(Lender::class);
    }

    public function borrower()
    {
        return $this->hasOne(Borrower::class);
    }
}

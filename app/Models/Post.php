<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'borrower_id'
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }
}

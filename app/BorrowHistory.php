<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table = 'borrow_history';

    protected $guarded = [];

    // relasi table eloquent
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

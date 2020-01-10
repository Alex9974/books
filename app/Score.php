<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function book() {
        return $this->belongsTo(Book::class); 
    }

    public function scopePopular($query)
    {
        return $query->where('vote', '>', 100);
    }
}

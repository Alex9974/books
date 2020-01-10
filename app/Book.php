<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function genre() {
        return $this->belongsTo(Genre::class); 
    }

    public function authors() {
        return $this->belongsToMany(Author::class); 
    }

    public function picture() {
        return $this->hasOne(Picture::class);
    }

    public function score() {
        return $this->hasOne(Score::class);
    }

    public function scopePriceRef($query) {
        return $query->select('ref', DB::raw('SUM(price) as total') )->groupBy('ref')->get();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class singlePost extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}

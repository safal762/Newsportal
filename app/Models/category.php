<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function  categories(){
        return $this->belongsToMany(article::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function article(){
        return $this->belongsToMany(article::class,'category_id');
    }
}

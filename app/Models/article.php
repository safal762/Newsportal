<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function category(){
        return $this->belongsToMany(category::class,'article_id');
    }
}

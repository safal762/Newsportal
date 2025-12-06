<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function categories (){
        return $this->belongsToMany(category::class );
    }
}

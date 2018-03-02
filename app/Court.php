<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
     public function lawyer()
    {
    	return $this->belongsTo(Lawyer::class);
    }
    public function courttype()
     {
    	return $this->hasMany(courttype::class);
    }
}

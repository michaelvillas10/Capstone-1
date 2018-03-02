<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
     public function employee()
    {
    	return $this->belongsTo(Employee::class);
    }
    public function courttype()
     {
    	return $this->hasMany(courttype::class);
    }
    public function branch()
     {
    	return $this->hasMany(Branch::class);
    }

}

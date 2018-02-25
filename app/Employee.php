<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function lawyer()
    {
    	return $this->belongsTo(Employee::class);
    }
    
    public function position()
    {
    	return $this->hasOne(Position::class);
    }


}

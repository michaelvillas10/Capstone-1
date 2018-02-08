<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function lawyer()
    {
    	return $this->hasMany(employees_has_lawyers::class);
    }
    
    public function lawyer()
    {
    	return $this->hasOne(Position::class);
    }


}

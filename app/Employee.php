<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function lawyer()
    {
    	return $this->hasMany(employees_has_lawyers::class);
    }
    
    public function position()
    {
    	return $this->hasMany(Position::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
   public function employee()
     {
    	return $this->hasMany(employees_has_lawyers::class);
    }
     public function approvedcases()
    {
    	return $this->hasMany(approvedcase::class);
    }
     public function schedules()
    {
    	return $this->hasMany(schedule::class);
    }
     public function court()
    {
    	return $this->hasOne(Court::class);
    }

}

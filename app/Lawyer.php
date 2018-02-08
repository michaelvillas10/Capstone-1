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

}

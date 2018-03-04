<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function client()
    {
    	return $this->belongsTo(client::class);
    }
    
    public function position()
    {
    	return $this->hasMany(Position::class);
    }
    public function schedules()
    {
    	return $this->hasMany(schedule::class);
    }
     public function court()
    {
    	return $this->hasMany(Court::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function language()
    {
    	return $this->hasMany(Language::class);
    }
    public function religion()
    {
    	return $this->hasOne(Religion::class);
    }
     public function citizenship()
    {
    	return $this->hasMany(Citizenship::class);
    }
    public function education()
    {
    	return $this->hasOne(Education::class);
    }
    
    public function employee()
    {
    	return $this->hasMany(Employee::class);
    }
        public function interviewee()
    {
    	return $this->hasOne(Interviewee::class);
    }
     public function casetobehandled()
    {
        return $this->hasOne(casetobehandled::class);
    }
    public function adverse()
    {
        return $this->hasOne(Adverse::class);
    }
  


}

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
    	return $this->hasOne(Citizenship::class);
    }
    public function education()
    {
    	return $this->hasOne(Education::class);
    }
     public function casetbh()
    {
    	return $this->hasMany(casetobehandled::class);
    }
    public function lawyer()
    {
    	return $this->hasOne(Lawyer::class);
    }
        public function interviewee()
    {
    	return $this->hasOne(Interviewee::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casetobehandled extends Model
{
     public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    
     public function approvedcase()
    {
    	return $this->hasMany(approvedcase::class);
    }
    public function lawyer()
    {
    	return $this->hasOne(Lawyer::class);
    }
    public function casetype()
    {
        return $this->hasOne(lawyercasetype::class);
    }


}

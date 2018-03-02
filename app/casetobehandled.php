<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casetobehandled extends Model
{
     public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    
     
    public function employee()
    {
    	return $this->hasMany(Employee::class);
    }
    public function casetype()
    {
        return $this->hasOne(lawyercasetype::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approvedcase extends Model
{
     public function status()
    {
    	return $this->hasOne(Status::class);
    }
     public function casetobehandled()
    {
    	return $this->belongsTo(casetobehandled::class);
    }
    public function lawyer()
    {
    	return $this->belongsTo(Lawyer::class);
    }
}

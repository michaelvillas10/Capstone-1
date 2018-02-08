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
    	return $this->hasMany(casetobehandleds_has_approvedcases::class);
    }
}

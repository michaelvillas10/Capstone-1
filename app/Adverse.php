<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adverse extends Model
{
    public function casetobehandled()
    {
    	return $this->belongsTo(casetobehandled::class);
    }
    
}

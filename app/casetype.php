<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casetype extends Model
{
    public function casetobehandled()
    {
    	return $this->belongsTo(casetobehandled::class);
    }
}

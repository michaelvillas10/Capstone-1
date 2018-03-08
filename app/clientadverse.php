<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientadverse extends Model
{
     public function client()
    {
    	return $this->belongsTo(Client::class);
    }
    
     public function adverse()
    {
    	return $this->belongsTo(Adverse::class);
    }
}

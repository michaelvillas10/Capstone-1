<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
       public function client()
    {
    	return $this->belongsTo(Client::class);
    }

}

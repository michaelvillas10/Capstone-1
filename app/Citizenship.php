<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizenship extends Model
{
     public function client()
    {
    	return $this->hasMany(Client::class);
    }
}

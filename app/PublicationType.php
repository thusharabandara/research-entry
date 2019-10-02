<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationType extends Model
{
	//I have to think about this ..???
    public function publications() {
        
        return $this->hasMany('App\Publication');        
    
    }
}

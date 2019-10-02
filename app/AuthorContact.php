<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorContact extends Model
{
    public function registers() {
    	return $this->belongsTo('App\Register', 'user_id');
    }
}

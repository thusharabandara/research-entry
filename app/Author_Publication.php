<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_Publication extends Model
{
    protected $fillable = ['author_id', 'publication_id'];

    public function publication() {
    	return $this->hasMany('App\Publication');
    }

     public function author() {
    	return $this->hasMany('App\Register');
    }
}

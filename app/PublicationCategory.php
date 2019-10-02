<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    protected $fillable = ['category_name'];


    public function publicationCategory() {
        
        return $this->hasMany('App\PublicationSubCategory');        
    }
}

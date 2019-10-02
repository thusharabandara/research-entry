<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationSubCategory extends Model
{
    protected $fillable = ['subcategory_name', 'category_id'];


    public function publicationSubCategory() {
        
        return $this->hasMany('App\PublicationThirdLevelSubCategory');        
    }
}

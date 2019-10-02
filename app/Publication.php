<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model

{
    /*public function register() {
    	return $this->belongsTo('App\Register');
    }*/
    protected $fillable = ['title', 'type', 'category', 'subcategory', 'third_level_subcategory', 'pages', 'description'];

    public function registers() {
    	return $this->belongsToMany('App\Register', 'author_publication', 'publication_id', 'author_id');
    }

    public function publicationcategories() {
    	return $this->hasMany('App\PublicationCategory');
    }

    public function publicationSubcategories() {
    	return $this->hasMany('App\PublicationSubCategory');
    }

    public function publictionThirdLevelSubcategories() {
    	return $this->hasMany('App\PublicationThirdLevelCategory');
    }

    
}

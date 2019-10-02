<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $events = [
        'created' => Events\NewUser::class,
    ];
    
	protected $table = "user_register_tb";


    public static function formUserDetails($data) {
    	$title=Input::get('title');
    	$firstname=Input::get('first_name');
    	$middlename=Input::get('middle_name');
    	$familyname=Input::get('family_name');
        $gender=Input::get('gender');
        $dob=Input::get('dob');
    	$email=Input::get('email');  	
    	$password=Hash::make(Input::get('password'));
    	

    	$users = new Register();

    	$users->title=$title;
    	$users->firstname=$firstname;
    	$users->middlename=$middlename;
    	$users->familyname=$familyname;
        $users->gender=$gender;
        $users->dob=$dob;
    	$users->email=$email;
    	$users->password=$password;
    	
    	$users->save();
    	
    }


    //represent many-to-many relationship with register(author) table
    public function publications() {
        
        return $this->belongsToMany('App\Publication', 'author_publication', 'author_id', 'publication_id');        
    }

    public function authorcontacts() {
        return $this->hasOne('App\AuthorContact');
    }
}

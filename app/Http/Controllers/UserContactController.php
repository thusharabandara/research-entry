<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserContact;
use Input;
use Auth;

class UserContactController extends Controller {
    
    public function store(Request $request) {

        $contact = new UserContact();

        $contact -> $phone_number = $request -> $phone_number;
        $contact -> $mobile_number = $request -> $mobile_number;
        $contact -> $email = Auth::user()->email;
        $contact -> $website = $request -> $website;
        $contact -> $twitter_id = $request -> $twitter_id;
        $contact -> $facebook_id = $request -> $facebook_id;
        $contact -> $linkedin_id = $request -> $linkedin_id;
        $contact -> $googleplus_id = $request -> $googleplus_id;

        $contact -> save();

        return redirect('/profile');

    }    
}

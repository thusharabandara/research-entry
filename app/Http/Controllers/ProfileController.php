<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\AuthorContact;
use Auth;
use Session;
use Redirect;
use Image;
use DB;

class ProfileController extends Controller
{
   //only allow authenticated people to this
    public function __construct() {
    	$this->middleware('auth');
    }

    public function updateGeneralInfo(Request $request) {

    	$this->validate($request, array(
    		'title' => 'required',
    		'firstname' => 'required|max:255',
    		'middlename' => 'required|max:255',
    		'familyname' => 'required|max:255',
    		'gender' => 'required',
    		'dob' => 'required',
    		'email' => 'required|email',
    	));

    	 $user = Auth::user();

            if($request->has('title')) {
                $user->title = $request->title;
            }
            
            if($request->has('firstname')) {
                $user->firstname = $request->firstname;
            }

            if($request->has('middlename')) {
                $user->middlename = $request->middlename;  
            }

            if($request->has('familyname')) {
                $user->familyname = $request->familyname;    
            }

            if($request->has('gender')) {
                $user->gender = $request->gender;    
            }

            if($request->has('dob')) {
                $user->dob = $request->dob;    
            }

            if($request->has('email')) {
                $user->email = $request->email;
            }
        
        $user->save();

        return redirect('/profile/general-info')->with('success', 'Your general information successfully updated!');
    }

    public function updateAboutMe(Request $request) {
        
        $user = Auth::user();

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('image/uploads/avatar/'. $filename));

            $user->avatar = $filename;
        }

        if($request->has('aboutme')) {
            $user->aboutme = $request->aboutme;
        }

        $user->save();

        return redirect('/profile/general-info')->with('success', 'Your bio successfully updated!');

    }



    public function updateContactInfo(Request $request) {
        $this->validate($request, array(
            'email' => 'email',
        ));

        if($request->has('phone_number') || $request->has('mobile_number') || $request->has('website') || $request->has('twitter_id') || $request->has('facebook_id') || $request->has('linkedin_id') || $request->has('googleplus_id')) {

            $authorContact = DB::table('authorContacts')->where('email', Auth::user()->email)->get();

            if($request->has('phone_number')) {
                $authorContact->phone_no = $request->phone_number;
            }

            if($request->has('mobile_number')) {
                $authorContact->mobile_no = $request->mobile_number;
            }

            if($request->has('website')) {
                $authorContact->website = $request->website;
            }

            if($request->has('twitter_id')) {
                $authorContact->twitter_id = $request->twitter_id;
            }

            if($request->has('facebook_id')) {
                $authorContact->facebook_id = $request->facebook_id;
            }

            if($request->has('linkedin_id')) {
                $authorContact->linkedin_id = $request->linkedin_id;
            }

            if($request->has('googleplus_id')) {
                $authorContact->googleplus_id = $request->googleplus_id;
            }

            $authorContact->save();


        } else {
            $authorContact = new AuthorContact();

            $authorContact -> $phone_no = $request -> $phone_number;
            $authorContact -> $mobile_no = $request -> $mobile_number;
            $authorContact -> $email = Auth::user()->email;
            $authorContact -> $website = $request -> $website;
            $authorContact -> $twitter_id = $request -> $twitter_id;
            $authorContact -> $facebook_id = $request -> $facebook_id;
            $authorContact -> $linkedin_id = $request -> $linkedin_id;
            $authorContact -> $googleplus_id = $request -> $googleplus_id;

            $authorContact->save();

        }

        return redirect('/profile/contact-info')->with('success', 'Your contact information successfully updated!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\Register;
use Auth;
use Image;
use DB;
use Mail;
use App\Mail\NewUserWelcome;

class RegisterController extends Controller
{
   /* public function __construct() {
    
        $this->middleware('auth');

    //no guard assigned.that means it will assigned the default guard 'user'
    }*/

    public function userDetails() {

    	$data=Input::except(array('_token'));

    	//var_dump($data);

    	$rule=array(
    		'title' => 'required',
    		'first_name' => 'required',
    		'middle_name' => 'required',
    		'family_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    		'confirm_password' => 'required|same:password'
    		);


    	$message=array(
    		'confirm_password.required' => 'confirm password is required',
    		'confirm_password.min' => 'confirm password must be at least 6 characters',
    		'confirm_password' => 'password and confirm password should be same'
    		);

    	$validator=Validator::make($data,$rule,$message);

    	if ($validator->fails()) {

    		return Redirect::to('register')->withErrors($validator);

    	} else {

    		Register::formUserDetails(Input::except(array('_token','confirm_password')));
            return Redirect::to('register')->with('success','Successfully Registered.');


    	}
    }

    public function loginCheck() {

       $data=Input::except(array('_token'));

        //var_dump($data);

        $rule=array(
            
            'email' => 'required|email',
            'password' => 'required',
            
            );

        $validator=Validator::make($data,$rule);

        if ($validator->fails()) {

            return Redirect::to('login')->withErrors($validator);

        } else {
            if(Auth::attempt($data)) {
                   return Redirect::to('');

            } else {
                    return Redirect::to('login')->withErrors($validator);
            }
            
        }

    }

    /*public function updateAvatar(Request $request) {

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('image/uploads/avatar/'. $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return redirect('/profile');
    }

    public function showPeople() {
        return view('people');
    }*/

    public function events() {
        $events = DB::table('events')->get();

        return view('home', ['events' => $events]);
    }


    public function email() {
        Mail::to(Auth::user()->email)->send(new NewUserWelcome());
        return redirect('/');
    }

}


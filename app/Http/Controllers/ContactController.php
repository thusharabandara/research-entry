<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class ContactController extends Controller
{
	public function showContact() {
		return view('contacts.contact');
	}

    public function sendMessage(Request $request) {

    	$this -> validate($request, array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            ));

    	$contact = new Contact();

    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->subject = $request->subject;
    	$contact->message = $request->message;
    	$contact->user_id = Auth::user()->id;

    	$contact->save();

    	return redirect('/contact-us')->with('success','Successfully sent your message.');
    }

}

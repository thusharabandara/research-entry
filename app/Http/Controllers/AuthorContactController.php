<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorContact;

class AuthorContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate($request, array(
            'email' => 'email',
        ));

        if(Auth::user()->email == $request->email) {

        $authorContact = new AuthorContact();

        $authorContact -> $phone_no = $request -> $phone_number;
        $authorContact -> $mobile_no = $request -> $mobile_number;
        $authorContact -> $email = Auth::user()->email;
        $authorContact -> $website = $request -> $website;
        $authorContact -> $twitter_id = $request -> $twitter_id;
        $authorContact -> $facebook_id = $request -> $facebook_id;
        $authorContact -> $linkedin_id = $request -> $linkedin_id;
        $authorContact -> $googleplus_id = $request -> $googleplus_id;

        $authorContact -> save();

        return redirect('/profile'); */   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
  public function __construct() {

  	$this->middleware('auth:admin');

  	//admin gaurd assigned
  } 


  public function index() {
  	
  	return view('admin.dashboard');
  }

  public function logout() {
  	Auth::logout();
  	return redirect(route('admin.login'));
  }
}

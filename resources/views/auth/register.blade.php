@extends('layouts.layout')

@section('content')

<style type="text/css">

  body {
     background: #d6d3d6;
  }

  #breadcrumb-login {
    width: 1280px;
    padding-top: 75px; 
  }

  #register-session {
    margin-left: 175px;
    max-width: 1000px;
    max-height: 100px;
    text-align: center;
  }

  #register-title {
    text-align: center;
    padding-bottom: 20px;
  }

  #register-form {
    margin-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 40px;
    padding-bottom: 40px;
    font-size: 13px; 
    position: relative;
    background: #FFFFFF;
    width: 750px;
    max-height: 1000px;
    border: none;
    -webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
  }

</style>

<body>
<div class="container" id="breadcrumb-login">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
      <li class="breadcrumb-item active">Register</li>
    </ol>
</div>

<div id="register-session">
  @if(Session::has('success'))
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success">
          <strong>{{Session::get('success')}}</strong>
        </div>      
      </div> 
    </div>
  @endif
</div>

<div class="container" id="register-form">
  <div id="register-title">
    <h2>Research Entry - Registration</h2><hr>
  </div>
  <div>
  <form class="form-horizontal" action="register_action" method="post">

  <input type="hidden" name="_token" value="{{csrf_token()}}">
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title</label>
      <div class="col-sm-3">
        <select class="form-control" name="title" id="title">
          <option>--Select Title--</option>
          <option>Prof.</option>
          <option>Dr.</option>
          <option>Mr.</option>
          <option>Mrs.</option>
          <option>Miss.</option>
        </select>
      </div>
      @if($errors->has('title')) <p style="padding-left: 100px; color: #CC0000">{{$errors->first('title')}}</p>@endif 
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="first_name">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
      </div>
      @if($errors->has('first_name')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('first_name')}}</p>@endif
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="middle_name">Middle Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter middle name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="family_name">Family Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="family_name" name="family_name" placeholder="Enter family name">
      </div>
      @if($errors->has('family_name')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('family_name')}}</p>@endif
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender</label>
      <div class="col-sm-10">
        <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Male">Male</label>
        <label class="radio-inline"><input type="radio" id="gender" name="gender" value="Female">Female</label>
      </div>
      @if($errors->has('gender')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('gender')}}</p>@endif
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="dob">Date of Birth</label>
      <div class="col-sm-10">
        <input class="form-control" id="dob" name="dob" placeholder="DD-MM-YYYY" type="Date" />
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
      @if($errors->has('email')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('email')}}</p>@endif
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="password">Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
      </div>
      @if($errors->has('password')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('password')}}</p>@endif
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="confirm_password">Confirm Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
      </div>
      @if($errors->has('confirm_password')) <p style="padding-left: 180px; color: #CC0000">{{$errors->first('confirm_password')}}</p>@endif
    </div><br />

    <div class="form-group">        
      <div class="container col-sm-offset-1 col-sm-10">
        <button type="submit" class="btn btn-primary form-control" style="align-items: center;">Register</button>
      </div>
    </div>
  </form>
  </div>

  </div>
</body>
@endsection
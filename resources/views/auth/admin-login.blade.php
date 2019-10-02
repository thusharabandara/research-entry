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
  
  .login-check {
    text-align: center;
    padding-bottom: 10px;
  }

  #login-form {
    margin-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 40px;
    padding-bottom: 40px;
    font-size: 13px; 
    position: relative;
    background: #FFFFFF;
    width: 500px;
    height: 480px;
    border: none;
    -webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
  }

</style>



<div class="container">
  <div class="container" id="breadcrumb-login">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
      <li class="breadcrumb-item active">Login</li>
    </ol>
  </div>
</div>

<div class="container" id="login-form">
  <div class="login-check">
    <h2>Research Entry - Admin Login</h2><hr><br>
  </div>

  {!! Form::open(array('route' => 'admin.login.submit')) !!}

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">

      @if($errors->has('email')) <p style="padding-right: 200px; padding-left: 210px; color: #CC0000">{{$errors->first('email')}}</p>@endif
    </div>

    <div class="form-group">
      <label for="password">Password</label>         
      <input type="password" class="form-control" name="password" placeholder="Enter password">

      @if($errors->has('password')) <p style="padding-right: 200px; padding-left: 210px; color: #CC0000">{{$errors->first('password')}}</p>@endif
    </div>

    <div class="form-group">        
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div><br>

    <div class="form-group">        
      <button type="submit" class="btn btn-primary form-control">Login</button>
    </div><br><br>
  {!! Form::close() !!}
</div>

@endsection
@extends('layouts.layout')
@section('title', ' | Contact-Us')
@section('content')

<head>
  {{-- <link rel="stylesheet" type="text/css" href="css/styles/contact.min.css"> --}}
  <style type="text/css">
    body {
      /*background: #d6d3d6;*/
      background-image: url(image/contact/background.jpg);
    }

    .contact-guide {
      max-width: 700px;
      padding-left: 30px;
      text-align: center;
    }

    #contact-us {
      margin-bottom: 20px;
      padding-left: 10px;
      padding-right: 10px;
      padding-top: 10px;
      font-size: 13px; 
      position: relative;
      background: #FFFFFF;
      width: 750px;
      max-height: 800px;
      border: none;
      -webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
      /*-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);*/
      opacity: 0.8; 
      z-index: 2; 
      color: #000000;
    }

    #contact-form {
      margin-top: 40px;
      max-width: 600px;
      max-height: 600px;
      margin-bottom: 30px;
    }

    #breadcrumb-contact {
      width: 1280px;
      padding-top: 75px;
      opacity: 0.8;
      z-index: 2;
      color: #000000;
    }
  </style>
</head>

<body>
  <div class="container" id="breadcrumb-contact">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
  </div>

<div class="container" id="contact-us">
  <div class="contact-guide">
    <h1>Contact Us</h1><hr>
    @if(Session::has('success'))
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success">
            <strong>{{Session::get('success')}}</strong>
          </div>      
        </div> 
      </div>
    @endif

    <h4>We are here to answer any questions you may have about our RE. Reach out to us and we will respond as soon as possible.</h4>
  </div>

  <div class="container" id="contact-form">  

    {!! Form::open(array('action' => 'ContactController@sendMessage')) !!}
      <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control">
        @if($errors->has('name')) <p style="color: #CC0000">{{$errors->first('name')}}</p>@endif
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="text" class="form-control">
        @if($errors->has('email')) <p style="color: #CC0000">{{$errors->first('email')}}</p>@endif
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input name="subject" type="text" class="form-control">
        @if($errors->has('subject')) <p style="color: #CC0000">{{$errors->first('subject')}}</p>@endif
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control" rows="6"></textarea>
        @if($errors->has('message')) <p style="color: #CC0000">{{$errors->first('message')}}</p>@endif
      </div>
      <button type="submit" class="btn btn-primary form-control">Send</button>
    {!! Form::close() !!}
  </div>
</div> 
</body>
</html>

@endsection
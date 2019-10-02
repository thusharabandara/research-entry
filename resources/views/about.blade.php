@extends('layouts.layout')
@section('title', ' | About')
@section('content')

<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">
  
  body {
    background: url('image/about/background.jpg');
  }


  .container {
    padding-top: 50px;
    width: 1280px;
    min-height: 600px;

  }

  #breadcrumb-about {
    margin-top: 25px;
  }

  #info-container {
    margin-bottom: 20px;
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 40px;
    font-size: 13px; 
    position: relative;
    background: #FFFFFF;
    width: 1000px;
    height: 500px;
    border: none;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    opacity: 0.8; 
    z-index: 2; 
    color: #000000;
  }

  #description {
    text-indent: 30px;
    line-height: 20px;
    margin-bottom: 30px;
  }

  #re-message {
    font-style: italic;
  }

</style>

</head>

<body>

  <div class="container">
    <ol class="breadcrumb" id="breadcrumb-about">
      <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <div class="container" id="info-container">
      <h1>About <strong>Research Entry</strong></h1><hr>
      <div class="row">
        <div class="col-md-4">
          <img src="image/logo/logo.png">
        </div>
        <div class="col-md-8">
          <h5 id="description">The Research Entry (RE) is a web-based system that can be used for the collection and management of research information for researchers to manage their research grants and publications. There are many features exist in the RE. One of the important thing is displaying upcoming events and give authors to engage with those events easily.</h5>

          <blockquote>
            <p id="re-message">RE provides a mechanism for researchers who registered to the system to submit, modify or renew their Researches for future purpose. Also it may useful to share research ideas with people who are the beginners and who don’t have ideas to manage their own researches.</p>
            <footer><strong>From RE</strong></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</body>


</html>

@endsection
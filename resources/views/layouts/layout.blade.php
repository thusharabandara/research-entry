<!DOCTYPE html>
<html lang="en">
<head>
  <title>Research Entry @yield('title')</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/image/logo/logo.png">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" type="text/css" href="css/styles/layout.min.css"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .navbar {
    padding-left: 35px;
    padding-right: 35px;
   /* padding-top: 8px;
    height: 70px; */
    }
    
    .navbar-custom {
      color: #FFFFFF;
      background-color: #000000;
    }

    #navbar-menu {
      font-size: 15px;
      opacity: 1;
    }

    #re-contact {
      margin: 0px;
      padding: 0px;
      height: 280px;
      color: #CCCCCC;
      background: #000000;
    } 

    .footer-distributed{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding-top: 50px;
      padding-left: 50px;
      padding-right: 100px;
    }

    .footer-distributed .footer-company-logo {
      text-align: center;
    }

    #company-name {
      padding-bottom: 10px;
      font-size: 30px;
      letter-spacing: 6px;
    }

    #logo {
      width: 160px;
      height: 160px;
    }

    .footer-distributed h3{
      color:  #ffffff;
      font: normal 36px;
      margin: 0;
    }

    .footer-distributed .footer-company-links {
      font-size: 13px;
    }

    .footer-distributed .footer-links{
      color:  #ffffff;
      margin: 20px 0 12px;
      padding: 0;
    }

    .footer-distributed .footer-links a{
      display:inline-block;
      line-height: 1.8;
      text-decoration: none;
      color:  inherit;
    }

    .footer-distributed .footer-company-contacts i{
      background-color:  #33383b;
      color: #ffffff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer-distributed .footer-company-contacts i.fa-envelope{
      font-size: 17px;
      line-height: 38px;
    }

    .footer-distributed .footer-company-contacts p{
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin:0;
    }

    .footer-distributed .footer-company-contacts p span{
      display:block;
      font-weight: normal;
      font-size:14px;
      line-height:2;
    }

    .footer-distributed .footer-company-contacts p a{
      color:  #5383d3;
      text-decoration: none;;
    }

    .footer-distributed .footer-company-about{
      line-height: 20px;
      color:  #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer-distributed .footer-company-about span{
      display: block;
      color:  #ffffff;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .footer-distributed .footer-icons{
      margin-top: 15px;
    }

    .footer-distributed .footer-icons a{
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color:  #33383b;
      border-radius: 2px;

      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;

      margin-right: 3px;
      margin-bottom: 5px;
    }

    .company-copyright {
      padding: 0px;
      margin: 0px;
      padding-top: 5px;
      font-size: 12px;
      height: 40px;
      width: 100%;
      background: #000000;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">

    @if(Auth::user())
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('/')}}"><strong>ResearchEntry</strong></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav">
          <li><a href="{{URL::to('/profile/general-info')}}">My Profile</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">About<i> <b class="caret"></b></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('/')}}"><i class="fa fa-fw fa-home fa-lg"></i> Home</a></li>
              <li><a href="{{URL::to('/about')}}"><i class="fa fa-fw fa-graduation-cap fa-lg"></i> About RE</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">News & Events<i> <b class="caret"></b></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('/news')}}">News</a></li>
              <li><a href="{{URL::to('/events')}}">Events</a></li>

            </ul>
          </li>

          <li><a href="{{URL::to('/people')}}">People</a></li>
          <li><a href="{{URL::to('/publication')}}">Publications</a></li>
          <li><a href="{{URL::to('/contact-us')}}">Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>

          <li><a href="{{URL::to('/logout')}}">
            <span style="color:#FFFFFF; font-weight: bold; padding-right: 20px;">Hi, {{ ucwords(Auth::user()->firstname) }}</span>
            <i class="fa fa-fw fa-power-off fa-lg"></i> Log Out</a></li>
          </ul>
      </div>
    </div>

    @else
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{URL::to('/')}}"><strong>ResearchEntry</strong></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">About<i> <b class="caret"></b></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('/')}}"><i class="fa fa-fw fa-home fa-lg"></i> Home</a></li>
              <li><a href="{{URL::to('/about')}}"><i class="fa fa-fw fa-graduation-cap fa-lg"></i> About RE</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">News & Events<i> <b class="caret"></b></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('/news')}}">News</a></li>
              <li><a href="{{URL::to('/events')}}">Events</a></li>

            </ul>
          </li>

          <li><a href="{{URL::to('/people')}}">People</a></li>

          <li><a href="{{URL::to('/publication')}}">Publications</a></li>
          <li><a href="{{URL::to('/register')}}">Contact Us</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>

          <li><a href="{{URL::to('/register')}}"><i class="fa fa-fw fa-pencil fa-lg"></i> Sign Up</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href=""><i class="fa fa-fw fa-sign-in fa-lg"></i> Log In<i> <b class="caret"></b></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::to('/login')}}"><i class="fa fa-fw fa-user fa-lg"></i> User</a></li>
              <li><a href="{{URL::to('/admin/login')}}"><i class="fa fa-fw fa-briefcase fa-lg"></i> Admin</a></li>
            </ul> 
          </li>   
        </ul>
      </div>
    </div>
    @endif      
  
  </nav>

@yield('content')
  
  <!-- contact us -->
  <div id="re-contact">
    <footer class="footer-distributed">

      <div class="col-md-3 footer-company-logo">
        <h3 id="company-name"><span><strong>RE</strong></span></h3>
          <img src="image/logo/logo.png" id="logo">
      </div>
      <div class="col-md-2 footer-company-links">
        <p class="footer-links">
          <a href="#">Home</a><br>
          <a href="#">About</a><br>
          <a href="#">News & Events</a><br>
          <a href="#">People</a><br>
          <a href="#">Publications</a><br>
          <a href="#">Contact Us</a>
        </p>
      </div>
      <div class="col-md-4 footer-company-contacts">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>903/16 William Gopallawa Mw.</span> Kandy, Sri Lanka</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+94 770370267</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:codedevzone@gmail.com">codedevzone@gmail.com</a></p>
        </div>

      </div>
      
      <div class="col-md-3 footer-company-social">

        <p class="footer-company-about">
          <span>About Research Entry</span>
          The Research Entry (RE) is a web-based system that can be used for the collection and management of research information for researchers to manage their research grants and publications.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>
      </div>
    </footer>
    <div class="company-copyright col-md-12">
      <h5 style="display: inline;"><strong>2017 © RE</strong></h5><p style="display: inline; word-spacing: 6px;">  |  <a href="">Legal</a>  |  <a href="">Privacy</a>  |  </p>  <p style="display: inline;"><a href="">Report a problem with this page</a></p>
    </div>
  </div> 
  <!-- end contact us -->

</body>
</html>


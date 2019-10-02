@extends('layouts.layout')

@section('content')

<!DOCTYPE html> 
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet'>
  <style>

  /* GLOBAL STYLES
  -------------------------------------------------- */
  /* Padding below the footer and lighter body text */
    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

    #re-home {
      width: 100%;
      height: 550px;
      padding: 0;
      margin: 0;
    }

    #re_header {
      padding-left: 140px;
      font-size: 45px;
      letter-spacing: 8px;
      text-shadow: 0 0 10px #000000;
    }

    #re_quote {
      padding-left: 120px;
      font-family: Agency FB;
      letter-spacing: 2px;
      font-size: 20px;
      text-shadow: 0 0 5px #000000;
    }
  /*end*/

  /*start carousel*/
  /* Carousel base class */
    .carousel {
        height: 550px;
        margin-bottom: 0px;

    }
  /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 10;
    }

  /* Declare heights because of positioning of img element */
    .carousel .item {
      height: 550px;
      background-color: #777;
    }
    
    .carousel-inner > .item > img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 550px;
    }

    .main-text {
      position: absolute;
      top: 240px;
      padding-left: 320px;
      color: #FFF;
      opacity: 0.9;
      text-shadow: 2px 2px 4px #000000;
    }

    #carousel-title {
      text-shadow: 2px 2px 8px #000000;
    }

    #carousel-def {
      text-shadow: 2px 2px 8px #000000;
    }
  /*end carousel*/

  /*start about*/
    #re-about {
      margin: 0px;
      padding-top: 35px;
      padding-bottom: 15px;
      min-height: 450px;   
    }

    #about-info {
      padding-top: 50px;
      font-size: 23px;
      left: 0px;
      margin-right: 40px;
      margin-left: 25px;
      font-style: normal;
      color: #000000;
    }

    #about-pic {
      background-image: url(image/about/1.jpg);
      border: 0px;
      border-radius: 30px;
      min-height: 250px;
      width: 550px;
      box-shadow: 5px 5px 15px grey;
    }
  /*end about*/  

  /*start news & events*/

    .blog-post-alt {
      font-size: 17px;
    }
    
    /*news-block*/
    #re-news {
      color: #FFFFFF;
      width: 100%;
      height: 550px;
      padding-left: 50px; 
      background: url(image/home/1.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    #news-card {
      padding: 0px;
      margin-top: 40px;
      margin-left: 20px;
      width: 400px;
      height: 400px;
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
    }

    #news-card .color-overlay {
      /* Rectangle: */
      background: rgba(84, 104, 110, 0.4);
      width: 400px;
      height: 400px;
      z-index: 10;
      top: 0;
      left: 0;
      transition: background 0.3s cubic-bezier(0.33, 0.66, 0.66, 1);
    }

    #news-card .gradient-overlay {
      /* bg-gradient: */
      background-image: -webkit-linear-gradient(transparent 0%, rgba(0, 0, 0, 0.7) 21%);
      background-image: -moz-linear-gradient(transparent 0%, rgba(0, 0, 0, 0.7) 21%);
      background-image: -o-linear-gradient(transparent 0%, rgba(0, 0, 0, 0.7) 21%);
      background-image: linear-gradient(transparent 0%, rgba(0, 0, 0, 0.7) 21%);
      width: 400px;
      height: 400px;
      top: 350px;
      left: 0;
      z-index: 15;
    }

    #news-card:hover #card-info {
      opacity: 1;
      bottom: 160px;
    }

    #news-card:hover .color-overlay {
      background: rgba(84, 104, 110, 0.8);
    }

    .title-content {
      text-align: center;
      color: #FFFFFF;
      margin: 20px 0 0 0;
      z-index: 20;
      width: 100%;
      top: 0;
      left: 0;
    }

    hr {
      width: 50px;
      height: 3px;
      margin: 20px auto;
      border: 0;
      background: #D0BB57;
    }

    .intro {
      width: 170px;
      margin: 0 auto;
      color: #DCE3E7;
      font-family: 'Droid Serif', serif;
      font-size: 13px;
      font-style: italic;
      line-height: 18px;
    }

    #card-info {
      width: 100%;
      position: absolute;
      bottom: 100px;
      left: 0;
      margin: 0 auto;
      padding: 0 50px;
      color: #DCE3E7;
      font-family: 'Droid Serif', serif;
      font-style: 16px;
      line-height: 24px;
      z-index: 20;
      opacity: 0;
      transition: bottom 0.3s, opacity 0.3s cubic-bezier(0.33, 0.66, 0.66, 1);
    }

    .utility-info {
      position: absolute;
      bottom: 0px;
      left: 0;
      z-index: 20;
    }

    .utility-list {
      list-style-type: none;
      margin: 0 0 30px 20px;
      padding: 0;
      width: 100%;
    }
    .utility-list li {
      margin: 0 15px 0 0;
      padding: 0 0 0 22px;
      display: inline-block;
      color: #DCE3E7;
      font-family: 'Roboto', sans-serif;
    }
    /*end-news-block*/

    #re-events {
      width: 1280px;
      height: 500px;
    }

    #event-block {
      margin-top: 20px;
      margin-bottom: 20px;
      padding-right: 10px;
      padding-bottom: 30px;
      height: 350px;
      font-size: 13px; 
      border-radius: 10px;
      position: relative;
      background: #FFFFFF;
      border: none;
      background-color: #;
      -webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
      -moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
      box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
    }

    #event-image {
       width: 290px;
       height: 100px;
       border-radius: 10px;
       margin-bottom: 40px;

    }

    #more-info-btn {
      padding-top: 10px;
    }


  /*end news & events*/

  /* start people */
    #re-people {
      margin: 0px;
      min-height: 450px;
      padding-top: 30px;
      padding-bottom: 40px;
    }

    #re-people {
      border-top: 1px solid #f6f6f6;
      border-bottom: 1px solid #f6f6f6;
      text-align: center;
    }

    #re-people h2 {
      padding-bottom: 20px;
    }

    #re-people img {
      border: 1px solid #f6f6f6;
      display: inline-block;
      padding: 10px;
      background-color: #f6f6f6;
      transition: all 0.4s ease-in;
    }

    #re-people img:hover {
      opacity: 0.4;
      cursor: pointer;
    }

    #re-people h3 {
      color: #6495ED;
      padding-bottom: 10px;
    }

    #re-people h4 {
      font-size: 14px;
      padding-top: 10px;
      line-height: 0px;
    }

    .social-icon {
      position: relative;
      padding: 0;
      margin: 0;
    }
    .social-icon li {
      display: inline-block;
      list-style: none;
    }
    .social-icon li a {
      color: #333;
      font-size: 13px;
      text-decoration: none;
      transition: all 0.4s ease-in-out;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
    }
    .social-icon li a:hover {
      background: #f2f2f2;
    }
  /* end people */

  /* start research */
    #re-research {
    margin-bottom: 0px;
    color: #000000;
    min-height: 450px;
    padding-top: 30px;
    background: url(image/parallax/2.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-bottom: 100px;
    }

    #re-research h4 {
      padding-bottom: 10px;
    }
    #re-research .progress {
      border-radius: 4px;
      background: #ffffff;
      height: 6px;
    }
    #re-research .progress .progress-bar-danger {
      background: #6495ED;
    }

    #re-research .text-top {
      padding-top: 50px;
    }

    #re-research span {
      display: block;
      text-align: left;
      font-weight: bold;
      padding-bottom: 10px;
    }

    #re-research small {
      font-weight: bold;
      padding-left: 200px;
    }
  /* end research */

    /* Explore */
    #explore {
      margin-bottom: 0px;
      color: #000000;
      min-height: 350px;
      padding-top: 120px;
      background: url(image/parallax/3.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    #explore h2 {
      font-size: 40px;
      color: #ffffff;
      font-family: 'Bree Serif'; 
      text-transform: uppercase;
      text-align: center;
    }

    #countdown {
      display: block;
      overflow: hidden;
      text-align: center;
      padding: 0
    }

    #countdown li {
      list-style: none;
      display:inline-block;
      margin-right: 40px;
      text-align: center;
      text-transform: uppercase;
      font-size: 18px;
      position: relative;
    }

    #countdown li:last-child {
      margin-right: 0
    }

    #countdown li span {
      display: block;
      font-size: 40px;
      font-weight: 700;
      height: 82px;
      line-height: 79px;
      width: 75px;
      border-radius: 10px;
      border-right: 1px solid #000000;
      border-bottom: 1px solid #000000;
    }

    #countdown li .days {
      background-color: #ffffff;
      border-top: 1px solid #000000;
      border-left: 1px solid #000000;
    }

    #countdown li .hours {
      background-color: #ffffff; 
      border-top: 1px solid #000000;
      border-left: 1px solid #000000;
    }

    #countdown li .minutes {
      background-color: #ffffff;
      border-top: 1px solid #000000;
      border-left: 1px solid #000000;
    }

    #countdown li .seconds {
      background-color: #ffffff;
      border-top: 1px solid #000000;
      border-left: 1px solid #000000;
    }
  </style>
</head>

<body>
    <div id="re-home" class="text-center">
    <!-- .carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="image/carousel/1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 id="carousel-title">Physical Sciences</h3>
              <p id="carousel-def">Physical science is a branch of natural science that studies non-living systems, in contrast to life science.  It in turn has many branches, each referred to as a "physical science", together called the "physical sciences".</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/carousel/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 id="carousel-title">Engineering</h3>
              <p id="carousel-def">Engineering is the application of science and math to solve problems. Engineers figure out how things work and find practical uses for scientific discoveries.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/carousel/3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 id="carousel-title">Life Sciences</h3>
              <p id="carousel-def">The life sciences are a collection of disciplines that investigate the structure and function of living things from molecules to entire ecosystems.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/carousel/4.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 id="carousel-title">Health Sciences</h3>
              <p id="carousel-def">Health Science is an applied science that refers to the body of knowledge applicable in the practice of clinical health care and population health.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/carousel/5.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h3 id="carousel-title">Social Sciences & Humanities</h3>
              <p id="carousel-def">Humanities and social sciences deal with human aspects like politics, law, linguistics, economics, and psychology.</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <div class="main-text hidden-xs">
        <div class="col-md-12 text-center">
            <h1 id="re_header">Research Entry</h1>
            <h4 id="re_quote">The only source of knowledge is experience</h4>
        </div>
    </div>
    </div>
    <!-- endcarousel -->
    

    <!-- about -->
    <div id="re-about" class="text-center">
      <h2>What is Research Entry?</h2><hr><br>
      <div class="col-md-6"  id="about-info">
          <p>The Research Entry (RE) is a web-based system that can be used for the collection and management of research information for researchers to manage their research grants and publications.</p>

      </div>

      <div class="col-md-6"  id="about-pic">
        <!-- containing an image -->
      </div>
    </div>
    <!-- end about -->
    
    <!-- news-->
    <div class="container text-center" id="re-news">
      <h2>Upcoming News</h2>
      <div class="row">
      <!-- /.news-card1 -->
      <div class="col-sm-4 industrial-day" id="news-card">
        <div class="title-content">
          <h3>News title</h3>
          <hr />
          <div class="intro">This is the brief discription about the news.</div>
        </div><!-- /.title-content -->
        <div id="card-info">
          More information about the news. More information about the news. More information about the news. More information about the news. 
        </div><!-- /.card-info -->
        <div class="utility-info">
          <ul class="utility-list">
            <li class="comments">12</li>
            <li class="date">03.12.2015</li>
          </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class="gradient-overlay"></div>
        <div class="color-overlay"></div>
      </div>
      <!-- /.news-card1 -->

      <!-- /.news-card2 -->
      <div class="col-sm-4" id="news-card">
        <div class="title-content">
          <h3>News title</h3>
          <hr />
          <div class="intro">This is the brief discription about the news.</div>
        </div><!-- /.title-content -->
        <div id="card-info">
          More information about the news. More information about the news. More information about the news. More information about the news. 
        </div><!-- /.card-info -->
        <div class="utility-info">
          <ul class="utility-list">
            <li class="comments">12</li>
            <li class="date">03.12.2015</li>
          </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class="gradient-overlay"></div>
        <div class="color-overlay"></div>
      </div>
      <!-- /.news-card2 -->

       <!-- /.news-card3 -->
      <div class="col-sm-4" id="news-card">
        <div class="title-content">
          <h3>News title</h3>
          <hr />
          <div class="intro">This is the brief discription about the news.</div>
        </div><!-- /.title-content -->
        <div id="card-info">
          More information about the news. More information about the news. More information about the news. More information about the news. 
        </div><!-- /.card-info -->
        <div class="utility-info">
          <ul class="utility-list">
            <li class="comments">12</li>
            <li class="date">03.12.2015</li>
          </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class="gradient-overlay"></div>
        <div class="color-overlay"></div>
      </div>
      <!-- /.news-card3 -->
      </div>
    </div>    
    <!-- end news -->

    <!-- events-->
    <div class="container text-center" id="re-events">
      <h2>Upcoming Events</h2><hr>
      <div class="row">
        @foreach ($events->take(4) as $event)
          <div class="col-sm-3">
            <div class="event text-center">
              <div id="event-block">
                 <img id="event-image" src="image/event/{{ $event->image }}">
                <h4 class="event-title">{{ $event->title }}</h4>
                <p class="event-text"><strong>{{ $event->organizer }} | {{ $event->location }}</strong></p>
                <div>  
                  <a href="{{ $event->link }}" class="btn btn-primary">Event Register</a>
                </div>
                <div id="more-info-btn">
                  <a href="/events" class="btn-sm btn-default pull-right">more info &raquo;</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach 
      </div>
    </div>    
    <!-- end events -->

    <section id="explore">
      <div class="container">
        <div class="row">        
          <div class="col-sm-6">
            <h2>event will start in</h2>
          </div>        
          <div class="col-sm-7 col-md-6">         
            <ul id="countdown">
              <li>          
                <span id="days" class="days time-font"></span>
                <p class="">days</p>
              </li>
              <li>
                <span id="hours" class="hours time-font"></span>
                <p class="">hours</p>
              </li>
              <li>
                <span id="minutes" class="minutes time-font"></span>
                <p class="">minutes</p>
              </li>
              <li>
                <span id="seconds" class="seconds time-font"></span>
                <p class="">seconds</p>
              </li>       
            </ul>
          </div>
        </div>
      </div>
    </section><!--/#explore-->
            
    <!-- people -->        
    <div id="re-people">
      <div class="text-center">
        <h2>Who We Are</h2><hr>
      </div>   
         <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
            <img src="/image/uploads/avatar/default.jpg" style="width: 300px; height: 300px;" class="img-responsive" alt="team img">
            <h4>Profession</h4>
            <h3>Name</h3>
            <p>This is my personal account</p>
             <ul class="social-icon text-center">
                    <li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
                     <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
                     <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
                   <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
                 </ul>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
            <img src="/image/uploads/avatar/default.jpg" style="width: 300px; height: 300px;" class="img-responsive" alt="team img">
            <h4>Profession</h4>
            <h3>Name</h3>
            <p>This is my personal account</p>
              <ul class="social-icon text-center">
                    <li><a href="#" class="fa fa-facebook" data-wow-delay="2s"></a></li>
                     <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
                     <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
                   <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
              </ul>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
            <img src="/image/uploads/avatar/default.jpg" style="width: 300px; height: 300px;" class="img-responsive" alt="team img">
            <h4>Profession</h4>
            <h3>Name</h3>
            <p>This is my personal account</p>
              <ul class="social-icon text-center">
                <li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
                  <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
                  <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
                <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
              </ul>
          </div>
        </div>
      </div> 
    </div>


    <!-- end people -->
         
    <!-- research -->     
    <div id="re-research">
      <div class="text-center">
        <h2>Research</h2>
      </div>
        <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.9s">
            <h3>About Research</h3>
            <h4>Observation, Question, Hypothesis, Experiment and Conclusion</h4>
            <p>Scientific research revolves around using the scientific method to generate hypotheses and provide analyzable results. All scientific research has a goal and ultimate aim, repeated and refined experimentation gradually reaching an answer.</p>
            <p>These results are a way of gradually uncovering truths and finding out about the processes that drive the universe around us. Only by having a rigid structure to experimentation, can results be verified as acceptable contributions to science.</p>
          </div>
          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.9s">
            <span class="text-top">Physical Sciences & Engineering <small>100%</small></span>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
              </div>
            <span>Life Sciences <small>80%</small></span>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
              </div>
            <span>Health Sciences <small>90%</small></span>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
              </div>
            <span>Social Sciences & Humanities <small>70%</small></span>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- end research -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


</body>

<script>
  // Set the date we're counting down to
  var countDownDate = new Date("2018-12-31 09:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();
      
      // Find the distance between now an the count down date
      var distance = countDownDate - now;
      
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      
      // Output the result in an element with id="demo"
      /*document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";*/
      document.getElementById("days").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
      
      // If the count down is over, write some text 
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
      }
  }, 1000);
</script>

</html>
    

@endsection
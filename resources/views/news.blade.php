@extends('layouts.layout')
@section('title', ' | News')
@section('content')

<!DOCTYPE html>
<html>
<head>
	

	<style type="text/css">
		
		.container {
			padding-top: 50px;
			min-height: 415px;
			width: 1280px;

		}

		#breadcrumb-news {
			margin-top: 25px;
		}


		#content-wrapper {
  width: 980px;
  min-height: 630px;
  margin: 0 auto;
  overflow: hidden;
}

#main {
  float: left;
  width: 660px;
  min-height: 630px;
  margin: 0 20px 0 0;
}

#headlines {
  width: 660px;
  min-height: 300px;
}

#main-headline {
  float: left;
  width: 400px;
  min-height: 300px;
  padding: 0 19px 0 0;
  border-right: 1px solid #ddd;
}

#more-headlines {
  float: right;
  width: 220px;
  min-height: 300px;
  padding: 0 0 0 20px;
}

#sidebars {
  float: right;
  width: 279px;
  min-height: 630px;
  padding: 0 0 0 20px;
  border-left: 1px solid #ddd;
}

#extras {
  width: 980px;
  height: 290px;
  margin: 0 auto;
  border-bottom: 1px solid #ddd;
}

#recommended {
  float: left;
  width: 312px;
  height: 290px;
  margin: 0 20px 0 0;
  padding: 20px 0;
}

#programs {
  float: left;
  width: 312px;
  height: 290px;
  margin: 0 10px 0 0;
  padding: 20px 0;
}

#cartoon {
  float: left;
  width: 312px;
  height: 290px;
  margin: 0 0 0 10px;
  padding: 20px 0;
}

/* TYPOGRAPHY */

#headlines h1, #headlines h2, #headlines h3, #headlines h4, #sidebars h3 {
  font-size: 2.3em;
  font-weight: normal;
  line-height: 1.0em;
  letter-spacing: -1px;
  color: #000;
  margin: 0 0 6px 0;
}

#headlines h2, #headlines h3, #sidebars h3 {
  font-size: 1.7em;
}

#headlines h4 {
  font-size: 1.3em;
  line-height: 1.1em;
}

#headlines h3 {
  margin: 0 0 4px 0;
  padding: 12px 0 0 0;
  border-top: 1px solid #ddd;
}

#headlines h1 a, #headlines h2 a, #headlines h3 a, #headlines h4 a, #sidebars h3 a {
  color: #000;
  text-decoration: none;
}

#headlines h1 a:hover, #headlines h2 a:hover, #headlines h3 a:hover, #headlines h4 a:hover, #sidebars h3 a:hover {
  color: #dc0000;
  text-decoration: underline;
}

#headlines h2.heading, #sidebars h2.heading-blue, #sidebars h2.heading {
  font: bold 0.8em arial,verdana,tahoma,sans-serif;
  line-height: 1.0em;
  letter-spacing: 0px;
  text-transform: uppercase;
  color: #fff;
  margin: 0 0 8px 0;
  padding: 7px 6px 6px 6px;
  background: #dc0000;
}

#sidebars h2.heading-blue {
  background: #2c6fae;
}

#sidebars h4 {
  font: bold 1.0em arial,verdana,tahoma,sans-serif;
  line-height: 1.2em;
  margin: 0 0 9px 0;
  padding: 5px 0 0 0;
}

#sidebars h4 a {
  color: #dc0000;
  text-decoration: none;
}

#sidebars h4 a:hover {
  color: #000;
  text-decoration: underline;
}

#main p, #sidebars p {
  font-size: 1.0em;
  line-height: 1.4em;
  margin: 0 0 16px 0;
}

#main p.author, #sidebars p.author {
  font: bold 0.8em arial,verdana,tahoma,sans-serif;
  line-height: 1.0em;
  margin: 0 0 10px 0;
  color: #999;
}

#main p.author span, #sidebars p.author span {
  color: #2c6fae;
}

#main p a, #sidebars p a {
  color: #dc0000;
  text-decoration: none;
}

#main p a:hover, #sidebars p a:hover {
  color: #dc0000;
  text-decoration: underline;
}

#extras h2.heading {
  font-size: 1.5em;
  font-weight: normal;
  line-height: 1.0em;
  letter-spacing: -1px;
  color: #000;
  margin: 0;
  padding: 10px 0;
  border-top: 4px solid #000;
  border-bottom: 1px solid #ddd;
}

#extras ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

#extras li {
  font-size: 1.0em;
  line-height: 1.3em;
  margin: 0;
  padding: 9px 0;
  border-bottom: 1px dotted #ccc;
}

#extras li.last {
  padding: 6px 0 0 0;
  border-bottom: none;
}

#extras li a {
  color: #dc0000;
  text-decoration: none;
}

#extras li a:hover {
  color: #000;
  text-decoration: none;
}

/* IMAGES */

#logo img {
  border: 0;
}

#ad img {
  margin: 15px 0 0 0;
  border: 0;
}

#sub-nav img {
  margin: 0 5px 0 0;
  border: 0;
  vertical-align: middle;
}

#main-headline img {
  margin: 0 0 6px 0;
  border: 0;
}

#main img.lefty {
  float: left;
  margin: 0 10px 0 0;
  border: 0;
}

#main img.righty {
  float: right;
  margin: 0 0 0 10px;
  border: 0;
}

#sidebars img.ad, #sidebars img.ad-right {
  margin: 0 24px 24px 0;
  border: 0;
}

#sidebars img.ad-right {
  margin: 0 0 24px 0;
}  

#extras img {
  margin: 8px 0 0 0;
  border: 0;
}

/* FORMS */

fieldset {
  margin: 0;
  padding: 0;
  border: 0;
}

#search form {
  margin: 40px 0 0 0;
}

.searchfield {
  font: normal 1.0em georgia,"times new roman",times,serif;
  color: #000;
  margin: 0 6px 0 0;
  padding: 6px;
  background: #fff;
  border: 1px solid #aaa;
}

.searchbtn {
  font: normal 1.2em georgia,"times new roman",times,serif;
  color: #000;
  margin: 0;
  padding: 2px;
}
		
	</style>
</head>
<body>

	<div class="container" id="breadcrumb-news">
		<ol class="breadcrumb" id="news-breadcrumb">
			<li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
			<li class="breadcrumb-item active">News</li>	
		</ol>

    	<!-- BEGIN CONTENT WRAPPER -->
<div id="content-wrapper">
  <!-- BEGIN MAIN -->
  <div id="main">
    <div id="headlines">
      <div id="main-headline">
        <h2 class="heading">Featured Story</h2>
        <img src="img/blank.jpg" alt="" />
        <h1><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h1>
        <p class="author">Name Here | <span>09.18.09</span></p>
        <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
        <p><a href="#">Full story &raquo;</a></p>
        <h2 class="heading">Latest Video</h2>
        <object width="400" height="300">
          <param name="movie" value="https://www.youtube.com/watch?v=NokJWOQTISo" />
          <param name="allowFullScreen" value="true" />
          <param name="allowscriptaccess" value="never" />
          <embed src="https://www.youtube.com/watch?v=NokJWOQTISo" type="application/x-shockwave-flash" allowscriptaccess="never" allowfullscreen="true" width="400" height="300"></embed>
        </object>
        <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
        <p class="author"><span>09.18.09</span></p>
        <p><a href="#">More video &raquo;</a></p>
      </div>
      <div id="more-headlines">
        <h2 class="heading">Featured Stories</h2>
        <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
        <p class="author">Name Here | <span>09.18.09</span></p>
        <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
        <p><a href="#">Full article &raquo;</a></p>
        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
        <p class="author">Name Here | <span>09.18.09</span></p>
        <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
        <p><a href="#">Full article &raquo;</a></p>
        <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
        <p class="author">Name Here | <span>09.18.09</span></p>
        <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
        <p><a href="#">Full article &raquo;</a></p>
        <h2 class="heading">Podcast</h2>
        <img src="img/microphone.png" alt="" class="righty" />
        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
        <p class="author"><span>09.18.09</span></p>
        <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
        <p><a href="#">More podcasts &raquo;</a></p>
      </div>
    </div>
  </div>
  <!-- END MAIN -->
  <!-- BEGIN SIDEBARS -->
  <div id="sidebars">
    <!-- BEGIN ADS -->
    <a href="#"><img src="img/side-ad.png" alt="" class="ad" /></a> <a href="#"><img src="img/side-ad.png" alt="" class="ad-right" /></a> <a href="#"><img src="img/side-ad.png" alt="" class="ad" /></a> <a href="#"><img src="img/side-ad.png" alt="" class="ad-right" /></a>
    <!-- END ADS -->
    <h2 class="heading-blue">Sports Headlines</h2>
    <img src="img/wayne.jpg" alt="" />
    <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
    <p>Ut sed arcu nulla. In eget lectus vitae purus volutpat consectetur suscipit ut justo.</p>
    <p><a href="#">More headlines &raquo;</a></p>
    <h2 class="heading">Celebrity Sightings</h2>
    <img src="img/casey.jpg" alt="" class="ad" /> <img src="img/hobo.jpg" alt="" class="ad-right" />
    <h2 class="heading">In the Community</h2>
    <h4><a href="#">Lorem ipsum dolor sit amet eget, consectetur adipiscing elit</a></h4>
    <h4><a href="#">Lorem ipsum dolor sit amet eget, consectetur adipiscing elit</a></h4>
  </div>
  <!-- END SIDEBARS -->
</div>
<!-- END CONTENT WRAPPER-->
<!-- BEGIN EXTRAS -->
<div id="extras">
  <div id="recommended">
    <h2 class="heading">Recommended Stories</h2>
    <ul>
      <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit &raquo;</a></li>
      <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit &raquo;</a></li>
      <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit &raquo;</a></li>
      <li class="last"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit &raquo;</a></li>
    </ul>
  </div>
  <div id="programs">
    <h2 class="heading">What's On Tonight</h2>
    <img src="img/rick.jpg" alt="" /> <img src="img/cbc.png" alt="" /> </div>
  <div id="cartoon">
    <h2 class="heading">Humour</h2>
    <img src="img/cartoon.jpg" alt="" /> </div>
</div>
<!-- END EXTRAS -->
  	</div>

</body>
</html>

@endsection
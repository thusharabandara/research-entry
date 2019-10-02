@extends('layouts.layout')
@section('title', ' | Events')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		
		.container {
			padding-top: 50px;
			min-height: 415px;
			width: 1280px;
		}

		#events {
			margin-top: 20px;
			margin-bottom: 20px;
			padding-bottom: 20px;
			border: none;
			border-radius: 10px;
			padding-left: 30px;
			padding-right: 30px;
			padding-top: 10px;
			min-height: 780px;
			background-color: #ffffff;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#breadcrumb-event {
			margin-top: 25px;
		}

		* { 
			margin:0;
			padding:0
		}
		
		body{ 
			font-family:san-serif,arial;
	    	font-size:14px;
	    	line-height:20px;
	    	background: #FFFFFF;
	    }

	
		h1, h2, h3, h4, h5, h6 {
			font-weight: normal;
			margin:0 0 15px;
			/*font-family: 'HelveticaNeue' !important;*/
		}

		
		img {
			width: 300px; 
			height: 120px; 
		}

		 /*start carousel*/
		 #myCarousel {
		 	margin-bottom: 30px;
		 }
	  /* Carousel base class */
	    .carousel {
	        height: 300px;
	        margin-bottom: 0px;
	    }
	  /* Since positioning the image, we need to help out the caption */
	    .carousel-caption {
	        z-index: 10;
	    }

	  /* Declare heights because of positioning of img element */
	    .carousel .item {
	      height: 300px;
	      background-color: #777;
	    }
	    
	    .carousel-inner > .item > img {
	      position: absolute;
	      top: 0;
	      left: 0;
	      min-width: 100%;
	      height: 300px;
	    }

	    .main-text {
	      position: absolute;
	      top: 120px;
	      padding-left: 460px;
	      color: #FFF;
	      text-shadow: 2px 2px 4px #000000;
	      letter-spacing: 2px;

	    }

	    #carousel-title {
	      text-shadow: 2px 2px 8px #000000;
	    }

	    #carousel-def {
	      text-shadow: 2px 2px 8px #000000;
	    }
	  /*end carousel*/

		.alignleft {
			float:left;
			margin-left:0px
		}

		.aligncenter {
			display: block;
			margin: 10px auto
		}	
		
		.alignright {
			float:right;
			margin-left:10px
		}	

		.floatleft {
			float:left
		}

		.floatright {
			float:right;
		}

		.wrap {
			width: 1000px;
			display: block;
			margin-left: 150px;
		}

		.fix {
			overflow:hidden
		}

		.single_content_wrapper {
			margin-left: -15px;
		}

		.single_content {
			margin-bottom: 15px;
			margin-left: 15px;
			max-height: 440px;
			min-height: 440px;
			width: 300px;
		}

		.single_content img {}

		.single_content h1 {
			font-size: 18px;
			color: #6b6b6b;
			margin-top: 15px;
			margin-bottom: 5px;
		}

		.single_content .author {
			color: #c4c4c4;
			font-size: 11px;
			margin-bottom: 15px;
		}

		.single_content p {
			color: #898989;
		}

		.single_content_info {
			background: none repeat scroll 0 0 #FFFFFF;
			padding: 10px;
			border: 1px solid #999;
			border-top: 0;
		}


		/*.sidebar{ 
			background: none repeat scroll 0 0 #FFFFFF;
			border: 1px solid #999999;
			padding: 19px;
			width: 240px;
		}

		.single_sidebar{ 
			margin-bottom:25px;
			color:#898989;
		}

		.single_sidebar input {
			width:90%;
		}

		.single_sidebar > h2 { 
			border-bottom: 2px dotted #BABABA;
			color: #6b6b6b;
			font-size: 18px;
			font-weight: bold;
			line-height: 22px;
			padding-bottom: 5px;
		}

		.single_sidebar a {
			display: block;
			color: #898989;
		}

		.single_sidebar a:hover {
			text-decoration: underline;
		}*/
	

	</style>
</head>
<body>

	<div class="container">
		<ol class="breadcrumb" id="breadcrumb-event">
		  <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
		  <li class="breadcrumb-item active">Events</li>
		</ol>

    	<div class="fix content_area">
				
			<!-- .carousel -->
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <!-- Indicators -->
		      <ol hidden class="carousel-indicators">
		        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#myCarousel" data-slide-to="1"></li>
		        <li data-target="#myCarousel" data-slide-to="2"></li>
		        <li data-target="#myCarousel" data-slide-to="3"></li>
		        <li data-target="#myCarousel" data-slide-to="4"></li>
		      </ol>
		      <div class="carousel-inner" role="listbox">
		        <div class="item active">
		          <img class="first-slide" src="image/event/carousel/2.jpg" alt="First slide">
		        </div>
		        <div class="item">
		          <img class="second-slide" src="image/event/carousel/3.jpg" alt="Second slide">
		        </div>
		        <div class="item">
		          <img class="second-slide" src="image/event/carousel/1.jpg" alt="third slide">
		        </div>
		        <div class="item">
		          <img class="second-slide" src="image/event/carousel/4.jpg" alt="fourth slide">
		        </div>
		        <div class="item">
		          <img class="second-slide" src="image/event/carousel/5.jpg" alt="fifth slide">
		        </div>
		      </div>
		      <div>
				<div class="main-text hidden-xs">
					<div id="event_title" class="col-md-12 text-center">
						<h1 id="re_header">Upcoming Events</h1>
						{{-- <h4 id="re_quote">The only source of knowledge is experience</h4> --}}
					</div>
				</div>
		      </div>
		    </div>
		    <!-- endcarousel -->
				
			
			<div class="fix wrap content_wrapper">
				{{-- startevent	 --}}
				<div class="fix content">
					<div class="fix main_content floatleft">
						<div class="fix single_content_wrapper">
						
							@foreach ($events as $event)
							<a href="{{ $event->link }}">
								<div class="fix single_content floatleft">
									<img id="{{ $event->id }}" src="image/event/{{ $event->image }}" alt=""/>
									<div class="fix single_content_info">
										<h1>{{ $event->title }}</h1>
										<p class="author">By {{ $event->organizer }}</p>
										<p>{{ $event->description }}</p>
										<div class="fix post-meta">
											<p>{{ $event->start_date }}  |  {{ $event->location }}</p>
										</div>
									</div>
									
								</div>
							</a>
							@endforeach
						</div>
					</div>
  				</div>
  				{{-- Pagination display --}}
				{{ $events->links() }}
				{{-- endevent --}}
  			</div>

  			{{-- <div class="fix sidebar floatright">

				<div class="fix single_sidebar">
						<h2>Search</h2>
						<input class="search" type="text" placeholder="Search and hit enter"/>
				</div>
				<div class="fix single_sidebar">
					<h2>A little about me</h2>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum. Sed posuere consectetur est at mant lobortis. Sed posuere consectetur est lobortis. Fusce  mauris condimentum.</p>
				</div>
				<div class="fix single_sidebar">
					<h2>Categories</h2>
					<a href="">photography(5)</a>
					<a href="">food(9)</a>
					<a href="">Salads(4)</a>
					<a href="">spicy(3)</a>
					<a href="">Wine(5)</a>
				</div>
			</div> --}}
  			
  		</div>
  	</div>
</body>
</html>

@endsection
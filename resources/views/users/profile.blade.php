@extends('layouts.layout')
@section('title', ' | MyProfile')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

	<style type="text/css">

		body {
			background: #d6d3d6;
		}

		.container {
			padding-top: 50px;
			padding-bottom: 50px;
			width: 1280px;
			min-height: 900px;
		}

		#breadcrumb-profile {
			margin-top: 25px;
		}

		/* Side Navigation */

		@media(min-width:780px) {
			.side-nav {
				top: 140px;
				width: 260px;
				height: 700px;
				border: none;
				border-radius: 15px;
				overflow-y: auto;
				background-color: #000000;
				bottom: 0;
				overflow-x: hidden;
				padding-bottom: 40px;
				-webkit-box-shadow: 3px 3px 14px -4px rgba(0,0,0,0.61);
				-moz-box-shadow: 3px 3px 14px -4px rgba(0,0,0,0.61);
				box-shadow: 3px 3px 14px -4px rgba(0,0,0,0.61);
			}

			.side-nav>li>a {
				width: 260px;
				color: #999999;
				cursor: pointer;
			}

			.side-nav li a:hover,
			.side-nav li a:focus {
				outline: none;
				color: #ffffff;
				background-color: #999999 !important;
			}

			.side-nav li a.active {
    			background-color: #343531;
			}
		}

		hr {
			display: block;
		    margin-top: 10px;
		    margin-bottom: 10px;
		    margin-left: auto;
		    margin-right: auto;
		    border-style: inset;
		    border-width: 1px;
		}

		.avatar {
			padding-left: 30px;
			padding-top: 30px;
		}

		#avatar {
			border-radius: 50%;
			border: none;
		}

		#bio {
			font-family: 'Lato';
			font-size: 15px;
			position: relative;
			min-height: 200px;
			border: none;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 10px;
			background-color: #FFFFFF;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#profile-name {
			font-family: 'Roboto';
		}

		#personal-details {
			font-size: 13px; 
			position: relative;
			background: #FFFFFF;
			height: 475px;
			border: none;
			margin-top: 20px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 10px;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		h3 {
			font-family: 'Roboto';
		}

		.actions {
			position: relative;
			height: 300px;
			width: 180px;
			border: none;
    		border-radius: 5px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 10px;
			background-color: #aba8ab;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#about-me {
			min-height: 270px;
		}

		#educational-info {
			margin-top: 20px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 10px;
			font-size: 13px; 
			position: relative;
			background: #FFFFFF;
			height: 500px;
			border: none;
			background-color: #;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#contact-info {
			margin-top: 20px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 10px;
			font-size: 13px; 
			position: relative;
			background: #FFFFFF;
			height: 500px;
			border: none;
			background-color: #;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#research-info {
			padding-top: 10px;
			margin-top: 20px;
			background-color: #ffffff;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

		#my-publications {
			padding-bottom: 10px;
		}

		table {
    		border-collapse: collapse;
    		width: 100%;
		}

		th {
    		text-align: center;
    		padding: 8px;
		}

		td {
			padding-bottom: 10px;
		}

		#td-publication-title, #td-author, #td-category {
			width: 150px;
		}

		#td-publication-title, #td-author, #td-category, #td-year {
			font-size: 11px;
		}

		#td-author, #td-category {
			font-style: italic;
		}

		#authors-link {
			color: #000000;
		}

		#td-year {
			max-width: 20px;
			white-space: nowrap;
			overflow: hidden;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<ol class="breadcrumb" id="breadcrumb-profile">
			<li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
			<li class="breadcrumb-item active">Profile</li>
		</ol>

		@if(Session::has('success'))
	      <div class="row">
	        <div class="col-md-12">
	          <div class="alert alert-success">
	            <strong>{{Session::get('success')}}</strong>
	          </div>      
	        </div> 
	      </div>
	    @endif

        <div class="collapse navbar-collapse col-lg-3 col-md-3 hidden-sm hidden-xs">
	    	<ul class="nav navbar-nav side-nav" id="ul-1">
	    		<li>
                    <div class="avatar" align="center">
                        <img id="avatar" class="thumbnail img-responsive" src="/image/uploads/avatar/{{ Auth::user()->avatar }}" width="200px" height="200px">
                    </div>
	    		</li>
	    		<li id="li-2">
	    			<a id="defaultOpen" class="tablinks" onclick="openTask(event, 'personal-details')"><i class="fa fa-fw fa-dashboard"></i> General</a>
	    		</li>
	    		<li>
	    			<a class="tablinks" onclick="openTask(event, 'educational-info')"><i class="fa fa-fw fa-bar-chart-o"></i> Educational</a>
	    		</li>
	    		<li>
	    			<a class="tablinks" onclick="openTask(event, 'contact-info')"><i class="fa fa-fw fa-table"></i> Contacts</a>
	    		</li>
	    		<li>
	    			<a class="tablinks" onclick="openTask(event, 'research-info')"><i class="fa fa-fw fa-edit"></i> Publications</a>
	    		</li>
	    	</ul>
	    </div>

		<div class="col-sm-7" id="bio">
			<div class="col-sm-12 form-inline">
				<h2 id="profilename" class="col-sm-7"><strong>{{ ucwords(Auth::user()->firstname) }} {{ ucwords(Auth::user()->familyname) }}</strong></h2>
				<div class="col-sm-5">
					<a href type="button" class="btn btn-primary pull-right btn-block" style="width: 30%; margin-top: 15px;" data-toggle="modal" data-target="#edit-aboutme"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit</a>
				</div>
			</div><hr>
			<div class="col-sm-12">
				<p>{{ Auth::user()->aboutme }}</p>
			</div>
		</div>

		{{-- ABOUT-ME POP-UP BEGINS --}}
		<div class="modal fade" id="edit-aboutme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel"><strong>Edit your Bio</strong></h4>
					</div>
					<div class="modal-body">
						{!! Form::open(['action' => 'ProfileController@updateAboutMe', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'method' => 'POST']) !!}
						<div class="form-group">
							<label class="control-label col-sm-2">Avatar :</label>
							<div class="col-sm-10">
								<input type="file" name="avatar" class="control-label">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2">Bio :</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="aboutme" rows="6">{{ Auth::user()->aboutme }}</textarea>
							</div>
						</div>
						<div class="form-inline">
							{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>	
		{{-- ABOUT-ME POP-UP ENDS --}}

		{{-- <div class="col-sm-2 pull-right">
			<div class="actions">
				<h5><strong>Action</strong></h5><hr>
				<form action="" class="form-group" method="post">
					<a href="" class="btn btn-default form-control"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit Profile</a>
					<a href="" class="btn btn-default form-control"><i class="fa fa-fw fa-save (alias) fa-lg"></i>Save Changes</a>
				</form>
			</div>  		
		</div> --}}


 		<div class="col-sm-7 tabcontent" id="personal-details">
			<div class="col-sm-12 form-inline">
				<label class="col-sm-7"><h3><strong>About</strong></h3></label>
				<div class="col-sm-5">
					<a href type="button" class="btn btn-primary pull-right btn-block" style="width: 30%; margin-top: 15px;" data-toggle="modal" data-target="#edit-general-info"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit</a>
				</div>
			</div><hr>
			

 			{!! Form::open(['class' => 'form-horizontal', 'method' => 'GET']) !!}
	 			<div class="form-group">
	 				<label for="title" class="control-label col-sm-2">Title :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" placeholder="{{ Auth::user()->title }}" id="title">
	 				</div>
	 			</div>
				<div class="form-group">
	 				<label for="firstname" class="control-label col-sm-2">First Name :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="firstname" placeholder="{{ Auth::user()->firstname }}">
	 				</div>
	 			</div>
	 			<div class="form-group">
	 				<label for="middlename" class="control-label col-sm-2">Middle Name :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="middlename" placeholder="{{Auth::user()->middlename}}">
	 				</div>
	 			</div>
	 			<div class="form-group">
	 				<label for="familyname" class="control-label col-sm-2">Family Name :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="familyname" placeholder="{{Auth::user()->familyname}}">
	 				</div>
	 			</div>
	 			<div class="form-group">
	 				<label for="gender" class="control-label col-sm-2">Gender :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="gender" placeholder="{{ Auth::user()->gender }}">
	 				</div>
	 			</div>
	 			<div class="form-group">
	 				<label for="dob" class="control-label col-sm-2">Date of Birth :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="dob" placeholder="{{ Auth::user()->dob }}">
	 				</div>
	 			</div>
	 			<div class="form-group">
	 				<label for="email" class="control-label col-sm-2">Email :</label>
	 				<div class="col-sm-8">
	 					<input type="text" readonly class="form-control" id="email" placeholder="{{ Auth::user()->email }}">
	 				</div>
	 			</div>
 			{!! Form::close() !!}
 		</div>

		{{-- ADD GENERAL POP-UP FORM BEGINS --}}
		<div class="modal fade" id="edit-general-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel"><strong>Edit your information</strong></h4>
					</div>
					<div class="modal-body">
						{!! Form::open(['action' => 'ProfileController@updateGeneralInfo', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
							<div class="form-group">
							    <label class="control-label col-sm-3" for="title">Title :</label>
						      	<div class="col-sm-8">
						        	<select class="form-control form-control-sm" name="title">
						        		@if(Auth::user()->title == "Prof.")
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Dr.</option>
							          		<option>Mr.</option>
							          		<option>Mrs.</option>
							          		<option>Miss.</option>

							          	@elseif(Auth::user()->title == "Dr.")
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Prof.</option>
							          		<option>Mr.</option>
							          		<option>Mrs.</option>
							          		<option>Miss.</option>

							          	@elseif(Auth::user()->title == "Mr.")
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Prof.</option>
							          		<option>Dr.</option>
							          		<option>Mrs.</option>
							          		<option>Miss.</option>

							          	@elseif(Auth::user()->title == "Mrs.")
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Prof.</option>
							          		<option>Dr.</option>
							          		<option>Mr.</option>
							          		<option>Miss.</option>

							          	@elseif(Auth::user()->title == "Miss.")
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Prof.</option>
							          		<option>Dr.</option>
							          		<option>Mr.</option>
							          		<option>Mrs.</option>
							          	@else
							          		<option>{{ ucwords(Auth::user()->title) }}</option>
							          		<option>Prof.</option>
							          		<option>Dr.</option>
							          		<option>Mr.</option>
							          		<option>Mrs.</option>
							          		<option>Miss.</option>
							          	@endif
						        	</select>
						        	@if($errors->has('title')) <p style="color: #CC0000">{{$errors->first('title')}}</p>@endif
						      	</div>
						    </div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="firstname">First Name :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="firstname" value="{{ ucwords(Auth::user()->firstname) }}">
						        	@if($errors->has('firstname')) <p style="color: #CC0000">{{$errors->first('firstname')}}</p>@endif
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="middlename">Middle Name :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="middlename" value="{{ ucwords(Auth::user()->middlename) }}">
						        	@if($errors->has('middlename')) <p style="color: #CC0000">{{$errors->first('middlename')}}</p>@endif
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="familyname">Family Name :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="familyname" value="{{ ucwords(Auth::user()->familyname) }}">
							        @if($errors->has('familyname')) <p style="color: #CC0000">{{$errors->first('familyname')}}</p>@endif
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="gender">Gender :</label>
								<div class="col-sm-8">
						        	<select class="form-control" name="gender">
							        	@if(Auth::user()->gender == "Male")
							          		<option>{{ ucwords(Auth::user()->gender) }}</option>
							          		<option>Female</option>
							          	@else
							          		<option>{{ ucwords(Auth::user()->gender) }}</option>
							          		<option>Male</option>
							          	@endif
						        	</select>
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="dob">Date of Birth :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="dob" value="{{ ucwords(Auth::user()->dob) }}">
						        	@if($errors->has('dob')) <p style="color: #CC0000">{{$errors->first('dob')}}</p>@endif
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Email :</label>
								<div class="col-sm-8">
						        	<input type="text" readonly class="form-control" name="email" value="{{ lcfirst(Auth::user()->email) }}
						        	">
						        	@if($errors->has('email')) <p style="color: #CC0000">{{$errors->first('email')}}</p>@endif
						      	</div>	
							</div><br />
							<div class="form-inline">
								{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		{{-- ADD GENERAL POP-UP FORM ENDS --}}

		
		<div class="form-group col-sm-7 tabcontent" id="educational-info">
			<div class="col-sm-12 form-inline">
				<label class="col-sm-7"><h3><strong>Educational</strong></h3></label>
				<div class="col-sm-5">
					<a href type="button" class="btn btn-primary pull-right btn-block" style="width: 30%; margin-top: 15px;" data-toggle="modal" data-target="#edit-educational-info"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit</a>
				</div>
			</div><hr>

			{!! Form::open(array('method' => 'GET', 'class' => 'form-horizontal', 'id' => 'educationalInfo')) !!}
				<div class="form-group">
					<label class="control-label col-sm-3" for="profession">Profession :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="profession" id="profession" value="">
					    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-3" for="university">University :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="university" id="university" value="">
					    </div>
			    </div>
			    <div class="form-group">
				    <label class="control-label col-sm-3" for="degree">Degree :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="degree" id="degree" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="graduateYear">Graduate(d) Year :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="graduateYear" id="graduateYear" value="">
					    </div>
				</div>
			{!! Form::close() !!}
		</div>

		{{-- ADD EDUCATIONAL POP-UP FORM BEGINS --}}
		<div class="modal fade" id="edit-educational-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel"><strong>Edit Educational Qualification</strong></h4>
					</div>
					<div class="modal-body">
						{!! Form::open(['action' => 'ProfileController@updateContactInfo', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
			
							<div class="form-group">
								<label class="control-label col-sm-3" for="profession">Profession :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="profession" value="{{ ucwords(Auth::user()->profession) }}">
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="university">University :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="university" value="{{ ucwords(Auth::user()->university) }}">
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="degree">Degree :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="degree" value="{{ lcfirst(Auth::user()->degree) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="graduateYear">Graduate(d) Year :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="graduateYear" value="{{ ucwords(Auth::user()->graduateYear) }}">
							    </div>
							</div><br>

							<div class="form-inline">
								{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		{{-- ADD EDUCATIONAL POP-UP FORM ENDS --}}

		<div class="form-group col-sm-7 tabcontent" id="contact-info">
			<div class="col-sm-12 form-inline">
				<label class="col-sm-7"><h3><strong>Contacts</strong></h3></label>
				<div class="col-sm-5">
					<a href type="button" class="btn btn-primary pull-right btn-block" style="width: 30%; margin-top: 15px;" data-toggle="modal" data-target="#edit-contact-info"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit</a>
				</div>
			</div><hr>

			{!! Form::open(array('method' => 'GET', 'class' => 'form-horizontal', 'id' => 'contact')) !!}
				<div class="form-group">
					<label class="control-label col-sm-2" for="phone_number">Phone :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="phone_number" id="phone_number" value="">
					    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="mobile_number">Mobile :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="mobile_number" id="mobile_number" value="">
					    </div>
			    </div>
			    <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="email" id="email" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="website">Website :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="website" id="website" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="twitter_id">Twitter :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="twitter_id" id="twitter_id" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="facebook_id">Facebook :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="facebook_id" id="facebook_id" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="linkedin_id">Linkedin :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="linkedin_id" id="linkedin_id" value="">
					    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="googleplus_id">Google+ :</label>
						<div class="col-sm-8">
					        <input type="text" readonly class="form-control" name="googleplus_id" id="googleplus_id" value="">
					    </div>
				</div>
			{!! Form::close() !!}
		</div>

		{{-- ADD CONTACTS POP-UP FORM BEGINS --}}
		<div class="modal fade" id="edit-contact-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h4 class="modal-title" id="myModalLabel"><strong>Edit contact information</strong></h4>
					</div>
					<div class="modal-body">
						{!! Form::open(['action' => 'ProfileController@updateContactInfo', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
			
							<div class="form-group">
								<label class="control-label col-sm-3" for="phone">Phone :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="phone_number" value="{{ ucwords(Auth::user()->phone_number) }}">
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="mobile_number">Mobile :</label>
								<div class="col-sm-8">
						        	<input type="text" class="form-control" name="mobile_number" value="{{ ucwords(Auth::user()->mobile_number) }}">
						      	</div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Email :</label>
								<div class="col-sm-8">
							        <input type="text" readonly class="form-control" name="email" value="{{ lcfirst(Auth::user()->email) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="website">Website :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="website" value="{{ ucwords(Auth::user()->website) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="twitter_id">Twitter :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="twitter_id" value="{{ ucwords(Auth::user()->twitter_id) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="facebook_id">Facebook :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="facebook_id" value="{{ ucwords(Auth::user()->facebook_id) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="linkedin_id">Linkedin :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="linkedin_id" value="{{ ucwords(Auth::user()->linkedin_id) }}">
							    </div>
							</div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="googleplus_id">Google+ :</label>
								<div class="col-sm-8">
							        <input type="text" class="form-control" name="googleplus_id" value="{{ ucwords(Auth::user()->googleplus_id) }}">
							    </div>
							</div><br>

							<div class="form-inline">
								{!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		{{-- ADD CONTACTS POP-UP FORM ENDS --}}


		<div class="col-sm-7 tabcontent" id="research-info">
			<form class="col-sm-12 form-inline" action="/new-publication" method="get">
				<label class="col-sm-7"><h3><strong>Publication</strong></h3></label>
				<div class="col-sm-5">
					<input class="btn btn-primary pull-right btn-block" type="submit" name="new_publication" value="Add New"  style="width: 35%; margin-top: 15px;">
				</div>
			</form><hr>
			
			<form id="my-publications">		
			<table class="table">
				<thread>
					<tr>
						<th>Research title</th>
						<th>Author</th>
						<th>Category</th>
						<th>Year</th>
						<th colspan="2">Action</th>
					</tr>
				</thread>
					
				@foreach($publications as $publication)
					@if(Auth::user()->id == $publication->publisher_id)
						<tr>
							<td id="td-publication-title" title="{{ $publication->title }}"><a href="/showContent/{{ $publication->filename }}"><strong>{{ $publication->title }}</strong></a></td>
							<td id="td-author" title="">
								@foreach($publication->registers as $register)
									<a href="" id="authors-link"> {{ $register->firstname }} {{ $register->familyname }}.</a>
								@endforeach
							</td>
							@foreach ($thirdlevelsubcategories as $thirdlevelsubcategory)
								@if($publication->third_level_subcategory == $thirdlevelsubcategory->id)
									<td id="td-category" title="{{ $thirdlevelsubcategory->thirdlevelsubcategory_name }}">
										<strong>
											{{ $thirdlevelsubcategory->thirdlevelsubcategory_name }}
										</strong>
									</td>
								@endif
							@endforeach
							<td id="td-year" title="{{ $publication->updated_at }}">{{ $publication->updated_at }}</td>
							<td>
								<a href="" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-edit (alias) fa-lg"></i>Edit</a>
							</td>
							<td>
								{{-- <a href="" class="btn btn-danger btn-sm">Remove</a> --}}
								{!! Form::open(['method' => 'delete', 'route' => ['publications.destroy', $publication->id]]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endif
				@endforeach
				

				{{-- Pagination display --}}
				{{-- {{ $publications->links() }} --}}
			</table>
			</form>
		</div>


		{{-- ADD PUBLICATION POP-UP FORM BEGINS --}}
		{{-- <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
						<h3 class="modal-title" id="myModalLabel">New Publication</h3>
					</div>
					<div class="modal-body">
						{!! Form::open(array('route' => 'publications.store', 'files' => true)) !!}
						<div class="form-horizontal">
							<div class="form-group">
								{{ Form::label('category', 'Category', array('class' => 'control-label col-sm-2'))}}
								<div class="col-sm-10">
									<select class="form-control input-sm">
										@foreach($categories as $category)
											<option value="{{ $category->id }}">{{ $category->category_name }}</option>
										@endforeach		
									</select>
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('sub-category', 'Sub Category', array('class' => 'control-label col-sm-2'))}}
								<div class="col-sm-10">
									<select class="form-control input-sm">
										<option value=""></option>
									</select> 
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('third-level-category', 'Third-level Category', array('class' => 'control-label col-sm-2'))}}
								<div class="col-sm-10">
									<select class="form-control input-sm">
										<option value=""></option>
									</select>  
								</div>
							</div>
							<div class="form-group">
								{{ Form::label('publication', 'Publication', array('class' => 'control-label col-sm-2'))}}
								<div class="col-sm-10">
									{{ Form::file('fileindex', array('style' => 'margin-top: 5px;'))}}
									@if($errors->has('fileindex')) <p style="color: #CC0000">{{$errors->first('fileindex')}}</p>@endif  
								</div>
							</div>

							<div class="form-group">
								{{ Form::label('description', 'Description', array('class' => 'control-label col-sm-2')) }}
								<div class="col-sm-10">
									<textarea class="form-control" rows="6" name="description"></textarea>
									@if($errors->has('description')) <p style="color: #CC0000">{{$errors->first('description')}}</p>@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-10">
									{{ Form::submit('Submit', array('class' => 'btn btn-primary', 'style' => 'margin-top:5px', 'style' => 'margin-left:450px')) }}
								</div>
							</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div> --}}
		{{-- ADD PUBLICATION POP-UP FORM ENDS --}}
		</div>		

	</div>

	{{-- <script type="text/javascript">
		var url = {{ route('contact-info') }};
	</script> --}}

	{{-- TAB CONTROL OF THE SIDE NAVBAR BEGINS --}}
	<script type="text/javascript">
		function openTask(evt, task) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(task).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		document.getElementById("defaultOpen").click();
	</script>
	{{-- TAB CONTROL OF THE SIDE NAVBAR ENDS --}}
	
</body>
</html>

@endsection
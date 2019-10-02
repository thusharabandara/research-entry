@extends('layouts.layout')
@section('title', ' | People')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.container {
			padding: 0px;
			padding-top: 50px;
			width: 1280px; 
			min-height: 800px;
		}

		#breadcrumb-people {
			margin-top: 25px;
		}

		#underconstruction {
			margin-left: 220px;
			width: 800px;
			height: 600px;
		}

		h4 {
			margin-left: 310px;
		}

	</style>
</head>
<body>
	<div class="container">
	<ol class="breadcrumb" id="breadcrumb-people">
		<li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
		<li class="breadcrumb-item active">People</li>
	</ol>
		<h4><strong>WE ARE CURRENTLY WORKING ON THIS PAGE. PLEASE STAY TUNED !</strong></h4>
		<img id="underconstruction" src="image/people/maintenance.png" >
	</div>

</body>
</html>


@endsection
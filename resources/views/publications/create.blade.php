@extends('layouts.layout')
@section('title', ' | Publications | Add-Publication')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">

	<style type="text/css">

		body {
		    /*background: #d6d3d6;*/
		    background: url('image/publication/1.jpg');
		}

		#breadcrumb-login {
		    width: 1280px;
		    padding-top: 75px;
		}

		#publication-type {
			padding-bottom: 25px;
		}

		#create-publication {
			margin-bottom: 20px;
			padding-left: 10px;
			padding-right: 10px;
			padding-top: 40px;
			padding-bottom: 40px;
			font-size: 13px; 
			position: relative;
			background: #FFFFFF;
			opacity: 0.95;
			color: #000000;
			width: 800px;
			min-height: 850px;
			border: none;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
		}

	</style>
</head>
<body>
	<div class="container" id="breadcrumb-login">
	    <ol class="breadcrumb">
	      <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
	      <li class="breadcrumb-item active">Add publication</li>
	    </ol>
	</div>

	<div class="container" id="create-publication">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Add Publication</h1><hr>

				@if(Session::has('success'))
				  <div class="row">
				    <div class="col-md-12">
				      <div class="alert alert-success">
				        <strong>{{Session::get('success')}}</strong>
				      </div>      
				    </div> 
				  </div>
				@endif

				{!! Form::open(array('route' => 'publications.store', 'files' => true)) !!}
					<div id="publication-type" class="btn-group" data-toggle="buttons">
						<label class="btn btn-default active">
							<input type="radio" name="publication_type" id="pub_journal" value="1" autocomplete="off" value="1" checked> Journal
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_conference" value="2" autocomplete="off"> Conference
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_chapter" value="3" autocomplete="off"> Chapter
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_book" value="4" autocomplete="off"> Book
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_newspaper" value="5" autocomplete="off"> Newspaper
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_patent" value="6" autocomplete="off"> Patent
						</label>
						<label class="btn btn-default">
							<input type="radio" name="publication_type" id="pub_thesis" value="7" autocomplete="off"> Thesis
						</label>
					</div>
					<div class="form-horizontal">
						<div class="form-group">
							{{ Form::label('title', 'Title', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<input type="text" name="title" class="form-control input-sm" placeholder="Publication title">
								@if($errors->has('title')) <p style="color: #CC0000">{{$errors->first('title')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('author_id', 'Author(s)', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<select class="form-control input-sm select2-multi" id="user" name="user[]" multiple="multiple">
									@foreach(Auth::user()->all() as $user)
										<option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->familyname }}</option>
									@endforeach		
								</select>
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('publication_date', 'Publication Date', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<input type="date" name="publication_date" class="form-control input-sm">
								@if($errors->has('publication_date')) <p style="color: #CC0000">{{$errors->first('publication_date')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('category', 'Category', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<select class="form-control input-sm" id="category" name="category">
										<option value=""> Select Category</option>
									@foreach($categories as $category)
										<option value="{{ $category->id }}">{{ $category->category_name }}</option>
									@endforeach		
								</select>
								@if($errors->has('category')) <p style="color: #CC0000">{{$errors->first('category')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('sub-category', 'Subcategory', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<select class="form-control input-sm" id="subcategory" name="subcategory">
									<option value=""></option>
								</select> 
								@if($errors->has('subcategory')) <p style="color: #CC0000">{{$errors->first('subcategory')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('third-level-subcategory', 'Third-Level Subcategory', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<select class="form-control input-sm" id="thirdlevelsubcategory" name="thirdlevelsubcategory">
									<option value=""></option>
								</select>  
								@if($errors->has('thirdlevelsubcategory')) <p style="color: #CC0000">{{$errors->first('thirdlevelsubcategory')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('pages', 'Pages', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<input type="number" name="pages" class="form-control input-sm">
								@if($errors->has('pages')) <p style="color: #CC0000">{{$errors->first('pages')}}</p>@endif
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('publication', 'Publication', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								{{ Form::file('fileindex', array('style' => 'margin-top: 5px;'))}}
								@if($errors->has('fileindex')) <p style="color: #CC0000">{{$errors->first('fileindex')}}</p>@endif  
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('publisher', 'Publisher', array('class' => 'control-label col-sm-3'))}}
							<div class="col-sm-9">
								<input disabled="" type="text" name="publisher_id" class="form-control input-sm" value="{{ Auth::user()->firstname}} {{ Auth::user()->middlename }} {{ Auth::user()->familyname }}">
							</div>
						</div>
						<div class="form-group">
							{{ Form::label('description', 'Description', array('class' => 'control-label col-sm-3')) }}
							<div class="col-sm-9">
								<textarea class="form-control" rows="6" name="description" placeholder="Description about the publication"></textarea>
								@if($errors->has('description')) <p style="color: #CC0000">{{$errors->first('description')}}</p>@endif
							</div>
						</div>

						<div class="form-inline">
							{!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	
	<script type="text/javascript">
		$('#category').on('change', function(e) { //event handler
			console.log(e);

			var cat_id = e.target.value;
			//AJAX
			$.get('/ajax-subcat?cat_id=' +cat_id, function(data) {
				//success data
				//console.log(data);
				$('#subcategory').empty();
				$('#subcategory').append('<option value="">' +"Select Subcategory"+'</option>');
				$.each(data, function(create, subcatObj) {
					$('#subcategory').append('<option value="'+subcatObj.id+'">' +subcatObj.subcategory_name+'</option>');
				});
			});
		});

		$('#subcategory').on('change', function(e) {  //event handler
			console.log(e);

			var subcat_id = e.target.value;

			//AJAX
			$.get('/ajax-thirdlevelsubcat?subcat_id=' +subcat_id, function(data) {
				//success data
				//console.log(data);
				$('#thirdlevelsubcategory').empty();
				$('#thirdlevelsubcategory').append('<option value="">' +"Select Third Level Subcategory"+'</option>');
				$.each(data, function(create, thirdlevelsubcatObj) {
					$('#thirdlevelsubcategory').append('<option value="'+thirdlevelsubcatObj.id+'">' +thirdlevelsubcatObj.thirdlevelsubcategory_name+'</option>');
				});
			});
		});

	</script>

	<script type="text/javascript" src="js/select2.min.js"></script>

	<script type="text/javascript">
		$('.select2-multi').select2({
			placeholder: "  Select Author(s)"
		});
	</script>

	{{-- <script type="text/javascript">
		$('.select2-multi').select2({
            placeholder: "   ---- Select Author(s) ----",
            minimumInputLength: 2,
            ajax: {
                url: '/tags/find',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
	</script> --}}
</body>
</html>

@endsection





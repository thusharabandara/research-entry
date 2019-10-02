@extends('layouts.layout')
@section('title', ' | Publications')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		$.fn.extend({
			treeview:	function() {
				return this.each(function() {
					// Initialize the top levels;
					var tree = $(this);
					
					tree.addClass('treeview-tree');
					tree.find('li').each(function() {
						var stick = $(this);
					});
					tree.find('li').has("ul").each(function () {
						var branch = $(this); //li with children ul
						
						branch.prepend("<i class='tree-indicator glyphicon glyphicon-chevron-right'></i>");
						branch.addClass('tree-branch');
						branch.on('click', function (e) {
							if (this == e.target) {
								var icon = $(this).children('i:first');
								
								icon.toggleClass("glyphicon-chevron-down glyphicon-chevron-right");
								$(this).children().children().toggle();
							}
						})
						branch.children().children().toggle();
						
						branch.children('.tree-indicator, button, a').click(function(e) {
							branch.click();
							
							e.preventDefault();
						});
					});
				});
			}
		});

		/**
		 *	The following snippet of code automatically converst
		 *	any '.treeview' DOM elements into a treeview component.
		 */
		$(window).on('load', function () {
			$('.treeview').each(function () {
				var tree = $(this);
				tree.treeview();
			})
		})
	</script>

	<style type="text/css">

		body {
			/*background: #d6d3d6;*/
			background-image: url(image/publication/background.jpg);
		}

		.container {
			padding-top: 50px;
			padding-bottom: 30px;
			width: 1280px;
			min-height: 980px;
			opacity: 0.95;
			z-index: 2;
			color: #000000;
		}

		#breadcrumb-publication {
			margin-top: 25px;
			margin-bottom: 0px;
		}

		#quick-search {
			margin-bottom: 30px;
		}

		.panel-heading {
			font-weight: bold;
		}

		.panel-body {
			padding: 0px;
			padding-top: 20px;
			padding-bottom: 20px;
			font-size: 13px;
			font-weight: bold;
			color: #000000;
		}

		/*Begin tree view*/
		div.panel:first-child {
		    margin-top: 20px;
		}

		div.treeview {
		    min-width: 100px;
		    overflow: auto;
			padding: 4px;
			margin-bottom: 10px;
			color: #000000;
			font-size: 12px;
		}

		div.treeview ul:first-child:before {
		    display: none;
		}

		.treeview, .treeview ul {
		    margin: 0px;
		    padding: 0px;
		    list-style: none;    
			color: #514D4D;
		}

		.treeview ul {
		    margin-left: 15px;
		    position: relative
		}

		.treeview ul ul {
		    margin-left: 25px;
		}

		.tree-indicator {
		    margin-right:5px;    
		    cursor:pointer;
		}

		.treeview li a {
		    text-decoration: none;
		    color:inherit;
		    cursor:pointer;
		}

		.treeview li button, .treeview li button:active, .treeview li button:focus {
		    text-decoration: none;
		    color:inherit;
		    border:none;
		    background:transparent;
		    margin:0px 0px 0px 0px;
		    padding:0px 0px 0px 0px;
		    outline: 0;
		}
		/*End tree view*/

		#publications {
			margin-top: 20px;
			margin-bottom: 20px;
			padding-bottom: 20px;
			border: none;
			padding-left: 30px;
			padding-right: 30px;
			padding-top: 10px;
			min-height: 780px;
			background-color: #ffffff;
			-webkit-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 9px -1px rgba(0,0,0,0.75);
			
		}

		table {
    		border-collapse: collapse;
    		width: 100%;
		}

		th {
    		text-align: center;
    		padding: 8px;
		}

		#td-publication-title, #td-author, #td-category {
			width: 200px;
		}

		#td-publication-title, #td-author, #td-category, #td-year {
			font-size: 12px;
		}

		#td-author, #td-category {
			font-style: italic;
		}

		#authors-link {
			color: #000000;
		}

	</style>
</head>
<body>
	<div class="container">
		<ol class="breadcrumb" id="breadcrumb-publication">
			<li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
			<li class="breadcrumb-item active">Publications</li>
		</ol>	
		<div class="col-sm-12" id="publications">
			<form class="col-sm-12 form-inline" action="/new-publication" method="get">
				<div class="col-sm-7"><h1>Publication</h1></div>
				<div class="col-sm-5">
					<input class="btn btn-primary pull-right btn-block" type="submit" name="new_publication" value="Add New"  style="width: 25%; margin-top: 15px;">
				</div>
			</form><hr>

			<div id="quick-search">
				<form>
				  <input class="all-fields" placeholder="Search all fields" aria-label="Search all fields" type="text" name="qs-all-fields" id="qs-all-fields" value="" size="34" maxlength="450" title="Search all fields">

				  <input class="author" placeholder="Author name" aria-label="Author name" type="text" name="qs-author" id="qs-author" value="" size="13" maxlength="450" title="For example: J S Smith or John Smith or Smith JS" style="_width:100%">

			      <input class="research-title" placeholder="Research title" aria-label="Research-title" type="text" id="qs-title" name="qs-title" value="" size="13" maxlength="450" title="For example: Research of Computer Science" {{-- onkeyup="showResult(this.value)" --}}>

			      <button class="btn btn-default" id="submit-search" type="submit" alt="Submit Quick Search" value="" title="Quick search" name="submit-search"><i class="glyphicon glyphicon-search"></i></button>
				</form>
			</div>



			<div class="col-sm-3" id="publication-category">
				<div class="panel panel-default">
			        <div class="panel-heading">Filter by category</div>
			        <div class="panel-body">
			            <!-- TREEVIEW CODE -->
			            <div class="treeview">
			                <ul>
			                	@foreach ($categories as $category)
			                		<li><a href="" id="{{ $category->id }}">
			                				{{ $category->category_name }}
			                			</a>
				                		<ul>
				                			@foreach ($subcategories as $subcategory)
				                				@if ($subcategory->category_id == $category->id)				         
				                				<li>
				                					<a href="#" id="{{ $subcategory->id }}">
				                						{{ $subcategory->subcategory_name }}
				                					</a>
					                				<ul>
					                					@foreach ($thirdlevelsubcategories as $thirdlevelsubcategory)
					                						@if($thirdlevelsubcategory->subcategory_id == $subcategory->id)
						                					<li>
						                						<a href="#" id="{{ $thirdlevelsubcategory->id }}">
						                							{{ $thirdlevelsubcategory->thirdlevelsubcategory_name }}
						                						</a>
						                					</li>
						                					@endif
					                					@endforeach
					                				</ul>
					                			</li>
					                			@endif
				                			@endforeach				                				
				                			</li>				        							                			
				                		</ul>
				                	</li>		
			                	@endforeach
			                    
			                </ul>
			            </div>
			            <!-- TREEVIEW CODE -->
			        </div>
			    </div>
			</div>

			<div class="col-sm-9" id="publication-table">
				<table class="table">
					<thread>
						<tr>
							<th>Research title</th>
							<th>Author(s)</th>
							<th>Category</th>
							<th>Year</th>
							<th>Action</th>
						</tr>
					</thread>
						
					<tbody>
						@foreach($publications as $publication)							
							<tr id="row-data">
								<td id="td-publication-title"><a href="/showContent/{{ $publication->filename }}"><strong>{{ $publication->title }}</strong></a></td>
								<td id="td-author">
									@foreach($publication->registers as $register)
										<a href="" id="authors-link">{{ $register->firstname }} {{ $register->familyname }}.</a>	
									@endforeach
								</td>
								<td id="td-category">
									<strong>
										@foreach ($thirdlevelsubcategories as $thirdlevelsubcategory)
											@if($publication->third_level_subcategory == $thirdlevelsubcategory->id)
												{{ $thirdlevelsubcategory->thirdlevelsubcategory_name }}
											@endif
										@endforeach	
									</strong>
								</td>
								<td id="td-year">{{ $publication->publication_date }}</td>
								<td id="td-download">
									<a href="/download/{{ $publication->filename }}" class="btn btn-success"><i class="fa fa-fw fa-arrow-circle-o-down fa-lg"></i>Download</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				{{-- Pagination display --}}
				{{-- {{ $publications->links() }} --}}

			</div>
		</div>
	</div>
	
	<script type="text/javascript">

	/*$('#qs-title').on('keyup', function(e) {
		console.log(e);

		var txt = $(this).val();
		
		if(txt != '') {
			$.ajax({
				type: 'get',
				url: '{{URL::to('search')}}',
				data: {'search' : txt},
				cache: false,
				success: function(data) {
					console.log(data);
					$('tbody').html(data);		
				}
			});
		}
		
	});*/


	$('#qs-title').on('keyup', function(e) {  //event handler
			console.log(e);

			var str = e.target.value;
			
			//AJAX
			$.get('/search?str=' +str, function(data) {
				//success data
				console.log(data);
				$.each(data, function(create, resultObj) {
					$('#td-publication-title').html(resultObj.title);
					$('#td-category').html(resultObj.thirdlevelsubcategory);
					$('#td-year').html(resultObj.publication_date);
				});
			});
		});	



		/*function showResult(str) {
			if (str.length == 0) { 
				document.getElementById("td-publication-title").innerHTML = "";
				return;
			}

			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {  // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("qs-title").innerHTML = this.responseText;
				}
			}
			xmlhttp.open("GET", "search?str="+str, true);
			xmlhttp.send();
		}*/


		/*$(document).ready(function(){
		   $("#qs-title").keyup (function() {
		       var str=  $("#qs-title").val();
		       if(str == "") {
		               $( "#publication-table" ).html("<b>Publications will be listed here...</b>"); 
		       }else {
		               $.get( "{{ url('/search?str=') }}"+str, function( data ) {
		                   $( "#publication-table" ).html(data);  
		            });
		       }
		   });  
		}); */
	</script>

</body>
</html>
@endsection
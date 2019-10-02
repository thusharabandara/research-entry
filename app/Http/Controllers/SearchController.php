<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use Input;

class SearchController extends Controller
{
    /*public function search(Request $request) {
    	if ($request->ajax()) {
    		$publications = DB::table('publications')->where('title', 'LIKE', '%'.$request->get('search').'%')->distinct()->get();

    		if($publications) {
    			return Response::json($publications);
    		} 
    	}


    	if($request->ajax()) {
 
			$output = "";

			if (strlen($str) > 0) {
				$publications = DB::table('publications')->where('title','LIKE','%'.$request->search."%")->distinct()->get();
		 	}

			if($publications) {
			 
				foreach ($publications as $key => $publication) {
				
					$output .=  '<tr id="row-data">'. 
								'<td id="td-publication-title"><a href="/showContent/'.$publication->filename.'"><strong>'.$publication->title.'</strong></a></td>'.
								'<td id="td-author"></td>'.
								'<td id="td-category">'.$publication->category.'</td>'.
								'<td id="td-year">'.$publication->publication_date.'</td>'. 
								'<td id="td-download">
									<a href="/download/'.$publication->filename.'" class="btn btn-success"><i class="fa fa-fw fa-arrow-circle-o-down fa-lg"></i>Download</a>
								</td>'.
								'</tr>';
				 
				}
				return Response($output);
		   }
    	}
	}*/


	public function search() {
		$str = Input::get('str');

    	if (strlen($str) > 0) {
			$publications = DB::table('publications')->where('title', 'LIKE', '%'.$str.'%')->get();	
    	}

    	if($publications) {	
    		return Response::json($publications);
    	}
	}
}





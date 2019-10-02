<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicationSubCategory;
use App\PublicationCategory;
use Input;
use Response;
use DB;

class PublicationSubCategoryController extends Controller
{
    
    function showSubCategory() {
    	$cat_id = Input::get('cat_id');

   		$subcategories = DB::table('publicationSubCategories')->where('category_id', '=', $cat_id)->get();

    	return Response::json($subcategories);
    }
}

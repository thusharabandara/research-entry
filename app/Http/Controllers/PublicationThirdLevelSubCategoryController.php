<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicationSubCategory;
use App\PublicationThirdLevelSubCategory;
use Input;
use DB;
use Response;

class PublicationThirdLevelSubCategoryController extends Controller
{
    function showThirdLevelSubCategory() {

    	$subcat_id = Input::get('subcat_id');

    	$thirdlevelsubcategories = DB::table('publicationThirdLevelSubCategories')->where('subcategory_id', '=', $subcat_id)->get();

    	return Response::json($thirdlevelsubcategories);
    }
}

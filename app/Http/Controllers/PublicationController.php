<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Publication;
use App\PublicationCategory;
use App\Author_Publication;
use App\Register;
use Redirect;
use Session;
use Auth;
use Storage;
use File;
use Response;
use DB;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //validate the data
        $this -> validate($request, array(
            'title' => 'required',
            'publication_date' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'thirdlevelsubcategory' => 'required',
            'pages' => 'required',
            'fileindex' => 'required|mimes:doc,docx,pdf',
            'description' => 'required',
            ));
        
        //store in the database
        $publication = new Publication;

        $publication->type = $request->publication_type;
        $publication->title = $request->title;
        $publication->publication_date = $request->publication_date;
        $publication->publisher_id = Auth::user()->id;
        $publication->category = $request->category;
        $publication->subcategory = $request->subcategory;
        $publication->third_level_subcategory = $request->thirdlevelsubcategory;
        $publication->pages = $request->pages;
        
        $file = request()->file('fileindex');
        $publication->name = $file->getClientOriginalName();
        $publication->filename = $file->getFilename();
        $publication->file = base64_encode(file_get_contents($file->getRealPath()));
        $publication->mime = $file->getMimeType();
        $publication->size = $file->getSize();
        $publication->description = $request->description;
        //$publication->user_id = Auth::user()->id;


        $extension = $file->getClientOriginalExtension();
        Storage::disk('local')->put('uploads/publications/'. $file->getFilename() . '.' . $extension, File::get($file));

        $publication -> save();

        $publication->registers()->sync($request->user, false);

        //redirect to another page
        //return Redirect::to('userprofile');
        //return redirect()->route('publications.show', $publication->id);
        
        return redirect('/new-publication')->with('success', 'Successfully uploaded your file.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show()
    {

        $publication = Publication::find(1);
        return view('publications.show')->withPublication($publication);  
       
    }*/

    public function showCreatePublication() {
        $categories = DB::table('publicationcategories')->get();

        return view('publications.create', ['categories' => $categories]);
        
    }

    public function showPublications() {
        $publications = Publication::all()->load('registers');
        $thirdlevelsubcategories = DB::table('publicationThirdLevelSubCategories')->get();
        return view('users.profile', ['publications' => $publications, 'thirdlevelsubcategories' => $thirdlevelsubcategories]);

         // $publications = Register::find(Auth::user()->id)->publications()->paginate(10);
        // return view('users.profile', ['publications' => $publications]);

    }

    public function showAllPublications() {
        $publications = Publication::all()->load('registers');
        $categories = DB::table('publicationCategories')->get();
        $subcategories = DB::table('publicationSubCategories')->get();
        $thirdlevelsubcategories = DB::table('publicationThirdLevelSubCategories')->get();

        return view('publications.publication',  [
            'publications' => $publications,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'thirdlevelsubcategories' => $thirdlevelsubcategories
        ]);

         // $publications = DB::table('publications')->paginate(10);
        // return view('publications.publication', ['publications' => $publications]);

        /*$publication = Publication::all();

        return view('publications.publication')->with('publication', $publication);*/
    }

    public function download($filename) {
        $file = DB::table('publications')->get();

        foreach ($file as $file) { 
            $name = $file->filename;
            $original = $file->name;

            if($name == $filename) {
                //extension of a file by name
                $extension = File::extension($file->name);
                $pathToFile = storage_path('app\uploads\publications'. '/'. $name. '.'. $extension);
                return Response::download($pathToFile, $original);
            }
        }
        
    }

    public function showContent($filename) {
        $file = DB::table('publications')->get();

        foreach ($file as $file) { 
            $name = $file->filename;

            if($name == $filename) {
                $extension = File::extension($file->name);
                $pathToFile = storage_path('app\uploads\publications'. '/'. $name. '.'. $extension);
                return Response::make(File::get($pathToFile), 200, array('Content-Type' => $file->mime));      
            }
        }
        
    }


   /* public function showTreeView() {
        $categories = DB::table('publicationCategories')->get();
        $subcategories = DB::table('publicationSubCategories')->get();
        $thirdlevelsubcategories = DB::table('publicationThirdLevelSubCategories')->get();


        return view('publications.publication', [
            'categories' => $categories, 
            'subcategories' => $subcategories,
            'thirdlevelsubcategories' => $thirdlevelsubcategories

        ]);
    }*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $publication = Publication::find($id);
       // $name = $publication->filename;
       // $extension = File::extension($publication->name);
       
       $publication->delete();
       // Storage::delete(storage_path('app\uploads\publications'. '/'. $name. '.'. $extension));

       return redirect('/profile/general-info')->with('success', 'Your publication has been deleted !');
    }
}

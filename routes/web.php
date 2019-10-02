<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', 'RegisterController@events');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/admin-logout', 'AdminController@logout')->name('admin.logout');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/events', 'EventController@index');

// Route::get('/events', function () {
//     return view('events');
// });

//Tasks related to the Contacts
Route::get('/contact-us', 'ContactController@showContact');

Route::post('new-message', array('uses' => 'ContactController@sendMessage'));

//User Contact Profile
Route::post('contact-info', array('uses' => 'UserContactController@store'))->name('contact-info');


Route::get('/profile/general-info', 'PublicationController@showPublications');

Route::get('/people', 'RegisterController@showPeople');

Route::get('/new-publication', 'PublicationController@showCreatePublication');

Route::get('/publication', 'PublicationController@showAllPublications')->name('publication.show');

Route::get('/download/{filename}', 'PublicationController@download')->name('publication.download')->middleware('auth');

Route::get('/showContent/{filename}', 'PublicationController@showContent')->name('publication.content');


//Registration
Route::post('/register_action','RegisterController@userDetails')->name('user.register');

//Login
Route::post('/login_check','RegisterController@loginCheck')->name('user.login');

//Logout
Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('');
    
})->middleware('auth');


//To update avatar
//Route::post('/profile-avatar','RegisterController@updateAvatar');

//To update aboutme
Route::post('/profile', 'ProfileController@updateAboutMe');

//To update General info
Route::post('/profile/general-info', 'ProfileController@updateGeneralInfo');

//To update Contact info
Route::post('/profile/contact-info', 'ProfileController@updateContactInfo');

//Publication
Route::resource('publications','PublicationController');

//People
Route::get('/people', function () {
    return view('people');
});

//Categories
Route::get('/ajax-subcat', 'PublicationSubCategoryController@showSubCategory');

Route::get('/ajax-thirdlevelsubcat', 'PublicationThirdLevelSubCategoryController@showThirdLevelSubCategory');

//Search
Route::get('/search', 'SearchController@search');


//email
// Route::get('/email', 'RegisterController@email')->name('sendEmail');
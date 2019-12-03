<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as LaraFile;

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

Route::get('/', function () {
    return view('welcome');
  //  return File::get(public_path() . '/myIndex.html');
   
   //return view('myIndex');
   // return file_get_contents(public_path().'/index.html');
});

Route::post('/loging', 'MyAuthController@authenticate');
// Route::get('/loging', 'MyAuthController@authenticate');

Route::get('/login', 'RouteController@LogInPage');

 Route::get('/logout', 'MyAuthController@LogOut');

// Route::post('/logout', 'MyAuthController@LogOut');

Route::get('/dashboard', function () {
    return view('dashboard');
    // return "hi" . auth() -> user() ; // -> username ;
});

// Project
Route::put('/proj/{id}', 'DashboardController@updateProject');
Route::get('/project', 'DashboardController@getAllProjects');
Route::get('/project/{id}', 'DashboardController@getProject');
Route::delete('/project/{id}', 'DashboardController@deleteProject');
Route::post('/project', 'DashboardController@postProject');

// file upload
Route::post('/upload', 'DashboardController@fileStore');

// Pershtypjet
Route::get('/pershtypjet', 'DashboardController@getPershtypjet');
Route::delete('/pershtypjet/{id}', 'DashboardController@deletePershtypje');
Route::post('/pershtypjet', 'DashboardController@postoPershtypje');

Route::get('/pershtypje', function () {

    if( auth() -> guest() ){
        return redirect('/');
    }
    
   // return view('pages.postPershtypje');
    return view('postoPershtypjen');
});
// postoPershtypjen.blade

// mesazhet 
Route::get('/mesazhet', 'DashboardController@getMesazhet');
Route::delete('/mesazhet/{id}', 'DashboardController@deleteMesazh');
Route::post('/mesazhet', 'DashboardController@postoMesazh');


/*
// testing post request end point

Route::get('/test', function () {
   // return view('testingPostRequest');
   return Hash::make("pass");
});
 
Route::post('/postreq', function ( Request $request  ) {
    $credentials = $request->only('username', 'password');
    echo " post works " ;
    return  $credentials ;
});
*/

/* 
Route::get('/delete', function () {
    // $files = Storage::files( "images" );
    // Storage::delete( 'images/mojito' );  // storage\app\images
   
    LaraFile::delete( "images/GCJJYoWUvRv051uiB2qKRANNauL5yDToERA2qgXQ.jpeg");
    $files = Storage::files(  );  //"images"  images/  public
     return   $files;
});
 */

// php artisan storage:link  krijon linkun e storage me public folders 
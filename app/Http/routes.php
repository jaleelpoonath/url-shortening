<?php
use App\Link;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('{short_url}', function ($short_url) {
	if(!isset($short_url) || $short_url == 'create-url-shortner' || $short_url == ''){
		return view('home');	
	}
	else{
	    $url = url('/').'/'.$short_url;
	  	$link = Link::where('short_url','=',$url)->first();
	  //If found, we redirect to the URL
	  	if($link) {
	    	return Redirect::to($link->url);
	    	//If not found, we  return error message
	  	} 
	  	else {
	    	return 'Invalid URL';
	  	}
  	}
});

Route::get('/create-url-shortner', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});

Route::post('/save_url','LinkController@urlToShortCode');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::group(array('before' => array('auth')),function(){
	if(Auth::check()){
		switch(Auth::user()->group_id){
			case 0:
				Route::get('/top', function()
				{
					return View::make('top.group0');
				});
				break;
			case 1:
				Route::get('/top', function()
				{
					return View::make('top.group1');
				});
				break;
		}
	} 
});



Route::controller('users','UserController');

Route::get('/',function()
{
	return Redirect::to('/users/login');
});

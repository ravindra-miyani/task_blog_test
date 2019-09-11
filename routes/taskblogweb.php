<?php


Route::group(['middleware' => 'auth'], function () {
	Route::get('/',['as'=>'group','uses'=>'GroupsController@index']);
	// Create group 
	Route::get('/group/create',['as'=>'create_group','uses'=>'GroupsController@create']);
	//Store group
	Route::post('/group',['as'=>'group_posts_store','uses'=>'GroupsController@store']);
	Route::get('/group/{post}',['as'=>'posts_show','uses'=>'GroupsController@show']);
	Route::post('/group/{post}/comments',['as'=>'comment_create','uses'=>'CommentsController@store']);	
});


Route::get('/register',['as'=>'register','uses'=>'RegistrationController@create']);
Route::post('/register',['as'=>'register_create','uses'=>'RegistrationController@store']);

// login 
Route::get('/login',['as'=>'session','uses'=>'SessionsController@create']);
Route::post('/login',['as'=>'login','uses'=>'SessionsController@store']);
Route::get('/logout',['as'=>'logout','uses'=>'SessionsController@destroy']);


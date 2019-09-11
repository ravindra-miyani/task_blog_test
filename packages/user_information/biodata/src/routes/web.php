<?php

Route::group(['namespace'=>'user_information\biodata'],function()
{
	Route::get('biodata',['uses' => 'BiodataController@index', 'as' => 'bio.details']);
});

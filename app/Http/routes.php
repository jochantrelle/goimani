<?php

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

Route::get('/', ['as'=>'home', 'uses'=>'StaticPageController@home']);

Route::get('about', ['as'=>'about', 'uses'=>'StaticPageController@about']);

Route::get('music', ['as'=>'music', 'uses'=>'StaticPageController@music']);

Route::get('contact', ['as'=>'contact', 'uses'=>'StaticPageController@contact']);

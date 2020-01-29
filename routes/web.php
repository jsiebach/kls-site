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

Route::domain(config('app.lab_app_domain'))->group(function () {
	Route::get('/', ['uses' => 'LabPageController@home']);
	Route::get('{page}/{subs?}', ['uses' => 'LabPageController@index'])
	     ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
});

Route::get('/', ['uses' => 'PageController@home']);
Route::group(['prefix' => 'admin'],function(){
	CRUD::resource('slideshow', 'Admin\SlideshowCrudController');
	CRUD::resource('publication', 'Admin\PublicationCrudController');
	CRUD::resource('abstract', 'Admin\ScienceAbstractCrudController');
});

Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
     ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);


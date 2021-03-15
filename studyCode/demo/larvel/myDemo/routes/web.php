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

Route::get('/', 'adminController@getIndex');
Route::get('/index','adminController@getIndex');
Route::get('/index2','adminController@getIndex2');
Route::get('/boxed','adminController@getBoxed');
Route::get('/top-nav','adminController@getTopNav');
Route::get('/fixed','adminController@getFixed');
Route::get('/collapsed-sidebar','adminController@getCollapsed');
Route::get('/widgets','adminController@getWidgets');
Route::get('/chartjs','adminController@getChartjs');
Route::get('/morris','adminController@getMorris');
Route::get('/flot','adminController@getFlot');
Route::get('/inline','adminController@getInline');

Route::get('/general','adminController@getGeneral');
Route::get('/icons','adminController@getIcons');
Route::get('/buttons','adminController@getButton');
Route::get('/sliders','adminController@getSliders');
Route::get('/timeline','adminController@getTimeline');
Route::get('/modals','adminController@getModals');





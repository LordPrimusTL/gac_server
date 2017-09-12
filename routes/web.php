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

Route::get('/', 'MainController@hymn');
Route::get('/logout', 'MainController@LogOut');
Route::get('main','MainController@GetMainHymn');
Route::post('main','MainController@HymnPost');
Route::get('main/delete/{id}','MainController@MainDelete');
Route::get('appendix/delete/{id}','MainController@AppDelete');
Route::get('main/vd/{id}','MainController@MainVerseDelete');
Route::get('appendix/vd/{id}','MainController@AppVerseDelete');
Route::post('appendix','MainController@HymnPost');
Route::get('appendix','MainController@GetAppHymn');
Route::get('main/{id}', 'MainController@GetMainVerse');
Route::post('main/{id}', 'MainController@VersePost');
Route::post('appendix/{id}', 'MainController@VersePost');
Route::get('appendix/{id}', 'MainController@GetAppVerse');
Route::get('admin','AdminController@Signin');
Route::post('admin','AdminController@AuthenticateUser');
Route::get('admin/dashboard','AdminController@Dashboard');
Route::post('admin/dashboard','AdminController@AddUser');
Route::get('review/{aid}','MainController@Review');
Route::post('review/{aid}','MainController@ReviewPost');


//Ajax Call
Route::post('addhymn','MainController@AddHymn');






//Api Call Routes

//Route::get('API/getmainhymn','ApiCallController@GetAllMainHymn');
Route::get('API/getmainhymn','ApiCallController@GetMainHymn');
Route::get('API/getapphymn','ApiCallController@GetAllAppHymn');
//Route::get('API/getmainverse','ApiCallController@GetAllMainVerse');
Route::get('API/getmainverse','ApiCallController@GetMainVerse');
Route::get('API/getappverse','ApiCallController@GetAllAppVerse');
Route::post('API/installations','ApiCallController@InstallationSave');
Route::get('API/getUpdateKey','ApiCallController@getUpdateKey');
//Route::get('getmainhymn/{hymn_id}/{verse_id}','MainController');
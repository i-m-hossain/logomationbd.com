<?php
Route::view('/', 'welcome');
Auth::routes();

//--------------------Multi Authentication--------------------------//

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');

Route::view('/home', 'user.user')->middleware('auth');
Route::view('/admin', 'admin.admin')->middleware('auth:admin');
Route::view('/blogger', 'blogger.blogger')->middleware('auth:blogger');

//-------end multi authentication-------------------//

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

// Route::get('/', 'WelcomeController@index');

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// Route::get('/test', function () {
//     echo "string";
// });
Route::get('authentication/getRegister', ['as' => 'getRegister', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('authentication/postRegister', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('authentication/getLogin', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('authentication/postLogin', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
// Route::resource('search', 'SearchController');
// Route::post('layout', 'SearchController@basicSearch');

// Route::get('getSearch', ['as' => 'getSearch', 'uses' => 'SearchController@getSearch']);
// Route::post('postSearch', ['as' => 'postSearch', 'uses' => 'SearchController@postSearch']);
// Route::get('testSearch', function () {
//     return view('testSearch');
// });

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/admin', ['middleware' => 'auth', 'uses' => 'AdminController@index']);
// Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', 'AdminController@index');
//     Route::get('/form', ['as' => 'admin.form', 'uses' => "FormController@index"]);
//     Route::post('post', ['as' => 'postDangKy', 'uses' => "FormController@add"]);
//     Route::resource('year', 'YearController');
//     Route::resource('season', 'SeasonController');
//     Route::resource('class', 'ClassRoomController');
//     Route::resource('subject', 'SubjectController');
//     Route::get('/table', ['as' => 'admin.table', 'uses' => "TableController@index"]);
// });

Route::get('form/layout', function () {
    return view('form.layouttest');
});
// Route::get('admin/form', ['as' => 'admin.form', 'uses' => "FormController@index"]);

// Route::post('post', ['as' => 'postDangKy', 'uses' => "FormController@add"]);
// Route::any('{all?}', 'AdminController@index')->where('all', '.*');
// Route::get('/list', function () {
//     return view('form.list');
// });
Route::resource('add', 'AddController');
Route::get('/search', 'SearchController@index');
Route::post('/search', 'SearchController@result');

Route::get('/search-custom', 'SearchCustomController@index');
Route::post('/search-custom', 'SearchCustomController@result');

Route::get('test', function () {
    return view('index.index');
});

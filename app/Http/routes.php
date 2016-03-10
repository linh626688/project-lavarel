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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('/test', function () {
    echo "string";
});
Route::get('authentication/getRegister', ['as' => 'getRegister', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('authentication/postRegister', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);

Route::get('authentication/getLogin', ['as' => 'getLogin', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('authentication/postLogin', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
Route::resource('search', 'SearchController');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/form', ['as' => 'admin.form', 'uses' => "FormController@index"]);
    Route::resource('year', 'YearController');
    Route::resource('season', 'SeasonController');
    Route::resource('class', 'ClassRoomController');
    Route::resource('subject', 'SubjectController');

    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::get('/table', ['as' => 'admin.table', 'uses' => "TableController@index"]);

});
Route::get('admin', 'AdminController@index');

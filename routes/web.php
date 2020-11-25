<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/user/create','UserController@create');
Route::post('/user/insert','UserController@insert');

Route::get('/user/view', 'UserController@view');


Route::any('/user/edit/{id}','UserController@edit');
Route::get('/user/delete/{id}','UserController@delete');



Route::post('/user/update','UserController@updateById');




Route::get('world', function () {
    return 'Hello World';
});
Route::get('/user', [UserController::class, 'index']);
Route::view('/welcomess', '/test/test');
Route::view('/welcomesss', '/test/test2');
 Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('usera/{name}', function ($name ) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Samantha']);
});








Route::get('/welcome', 'WelcomeController@index');
Route::get('/welcome/index2', 'WelcomeController@index2');
Route::get('/test', 'TestController@test');
Route::get('/practice','classcontroller@practice');
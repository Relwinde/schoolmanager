<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@usersCheck');

// Route::get('/', function (){
//     return view ('pages.admin-home');
// });

Route::post('register', 'RegisterController@creatAdmin')->name('register');

Route::get('/login', function (){
    return view ('pages.login');
})->name('login');

Route::post('/login', 'LoginController@authenticate')->name('log');

Route::get('/home', 'HomePageController@homeProvider')->name('home');

Route::post('/getClassCreateView', 'AjaxController@classCreationView')->name
('ajax.createClass');

Route::post('/createClass', 'ClassesController@createClass')->name
('createClass');

Route::get('/verify', 'RegisterController@verifyUser');

Route::post('/confirmAccount', 'RegisterController@savePassword')->name('save-password');
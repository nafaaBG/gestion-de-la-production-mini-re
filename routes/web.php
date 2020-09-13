<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::resource('/home', 'HomeController');


Route::get('/voyage', 'voyageController@search')->name('voyage');
Route::get('/conducteur', 'conducteurController@searchh')->name('conducteur');
Route::get('/camion', 'camionController@searchhh')->name('camion');
Route::get('/arret', 'arretController@searchhhh')->name('arret');
Route::get('/qualite', 'qualiteController@searcchhhh')->name('qualite');
Route::get('/home', 'HomeController@index')->name('home');

//search
Route::get('/search', 'voyageController@search')->name('search');
Route::get('/searchh', 'conducteurController@searchh')->name('searchh');
Route::get('/searchhh', 'camionController@searchhh')->name('searchhh');
Route::get('/searchhhh', 'arretController@searchhhh')->name('searchhhh');
Route::get('/searcchhhh', 'qualiteController@searcchhhh')->name('searcchhhh');






<?php
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/item', 'ItemController@index')->name('item');
Route::post('/item/saveItem','ItemController@ItemSave')->name('saveItem');
Route::get('/editItem{id}','ItemController@Edit')->name('editItem');
Route::post('/updateItem','ItemController@Update')->name('updateItem');
Route::get('/deleteItem{id}','ItemController@Delete')->name('deleteItem');

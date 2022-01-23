<?php

use App\images;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

// Route::get('/', function () {
//     $img = images::all();
//     return view('games.index', compact('img'));
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index_2', 'gems@index_2')->name('index_2');
Route::get('/games', 'gems@games')->name('games');
Route::get('/BeComeTrainer', 'gems@BeComeTrainer')->name('BeComeTrainer');
Route::get('/traineReqest', 'gems@traineReqest')->name('traineReqest');
Route::get('/howWork', 'gems@howWork')->name('howWork');
Route::get('/conversation', 'gems@conversation')->name('conversation');
Route::get('/favorite', 'gems@favorite')->name('favorite');
Route::get('/notifcation', 'gems@notifcation')->name('notifcation');
Route::get('/policy', 'gems@policy')->name('policy');
Route::get('/terms', 'gems@terms')->name('terms');
Route::get('/About', 'gems@About')->name('About');
Route::get('/game_details/{id}', 'gems@game_details')->name('/game_details/{id}');
Route::get('/Couch_profile/{id}', 'gems@Couch_profile')->name('/Couch_profile/{id}');
Route::get('conver_sation', 'gems@conver_sation')->name('conver_sation');
Route::get('/reservat', 'gems@reservat')->name('reservat');
Route::get('/Account', 'gems@Account')->name('Account');
Route::get('/login', 'gems@login')->name('login');
Route::get('/index', 'UserController@index')->name('index');
Route::get('/img', 'imagesController@index')->name('img');
Route::get('/bank_tansaction', 'gems@bank_tansaction')->name('bank_tansaction');


Route::get('MarkAsRead_all', 'MarkAsRead@MarkAsRead')->name('MarkAsRead_all');






// Route::resource('user', 'UserController');


Route::resource('img', 'imagesController');
Route::resource('coaches', 'coachController');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
});








Route::get('/{page}', 'AdminController@index');

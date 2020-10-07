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
// Обычные роуты
Route::get('/', 'mainController@start');//Начальная страница
// Авторизация
Auth::routes(['reset'=>false,'confirm'=>false,'verify'=>false]);
Route::get('/home', 'HomeController@index')->name('home');//Редирект на страницу профиля(Указано в файле LoginController)
Route::get('/logout','Auth\LoginController@logout')->name('get-logout');//Разлогиниться
// Ресурсные
Route::resource('user', 'UserController');
Route::resource('friend', 'FriendController');
Route::resource('friend_request', 'FriendRequestController');
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
Route::get('/users', 'mainController@users')->name('users');//Страница всех пользователей
// Редактирование
Route::get('/edit_profile', 'mainController@go_edit_profile')->name('edit-profile');//перенаправление на страницу редактированиея профиля
Route::post('/edit_profile', 'mainController@edit_profile')->name('edit-profile');//Редактирование профиля
// Администрирование
Route::get('/admin', 'mainController@admin')->name('admin-panel');//Переход на панель администратора
// Авторизация
Auth::routes(['reset'=>false,'confirm'=>false,'verify'=>false]);
Route::get('/home', 'HomeController@index')->name('home');//Редирект на страницу профиля(Указано в файле LoginController)
Route::get('/logout','Auth\LoginController@logout')->name('get-logout');//Разлогиниться
// Ресурсные
Route::resource('user', 'UserController');
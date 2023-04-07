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

// 初期表示（ログイン画面）
Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login.index');

// ユーザー登録
Route::get('/user', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('user.register');

// 診察履歴一覧
Route::get('/medicalrecords', function () {
    return view("medicalrecords");
})->name('medicalrecords.index');

Auth::routes();

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

// 必要なし？？
Route::get('/user', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('user.register');

// ユーザー登録
Route::post('/user/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('user.exec.register');

// 診察履歴一覧
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/medicalrecords', function () {
//         return view('medicalrecords');
//     })->name('medicalrecords.index');
// });
Route::get('/medicalrecords', function () {
    return view('medicalrecords');
})->name('medicalrecords.index')->middleware('auth');

// 病院情報登録
Route::get('/hospitalregistration', function () {
    return view('hospitalregistration');
})->name('hospitalregistration.index');


// 対象者登録
Route::get('/participantregistration', function () {
    return view('participantregistration');
})->name('participantregistration.index');

Auth::routes();

<?php

use App\Http\Controllers\HospitalMasterController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// TODO: 全体的に、ケバブケースでパス名書き直す。（修正範囲気をつける） bladeファイル名も統一させる

// 初期表示（ログイン画面）
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.index');

// TODO: 使用の確認。コメントの修正
// 必要なし？？
Route::get('/user', [RegisterController::class, 'showRegistrationForm'])->name('user.register');

// ユーザー登録
Route::post('/user/register', [RegisterController::class, 'register'])->name('user.exec.register');

// TODO: 画面作成後削除
// 診察履歴一覧
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/medicalrecords', function () {
//         return view('medicalrecords');
//     })->name('medicalrecords.index');
// });

// 診察履歴一覧
Route::get('/medicalrecords', function () {
    return view('medicalrecords');
})->name('medicalrecords.index')->middleware('auth');


// TODO: HospitalMasterControllerに初期表示のルーティングいるか？viewを出すのに必要？要検討
// 病院情報登録
Route::get('/hospitalregistration', [HospitalMasterController::class, 'index'])->name('hospitalregistration.index');
Route::get('/hospitalregistration/add', [HospitalMasterController::class, 'add'])->name('hospitalregistration.add');


// 病院情報一覧
// TODO: コントローラー作成要修正。readメソッドを作る必要ありか。
// Route::get('/hospital-list', [HospitalMasterController::class, 'index'])->name('hospital-list.index');
Route::get('/hospital-list', function () {
    return view('hospital-list');
})->name('hospital-list.index');

// 対象者登録
Route::get('/participantregistration', function () {
    return view('participantregistration');
})->name('participantregistration.index');

Auth::routes();

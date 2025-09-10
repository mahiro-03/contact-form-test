<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\Registered;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//index.blade.phpを表示させる
Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

//Contactで確認画面ボタンを押したときにconfirmアクションが実行される
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
//ContactControllerで入力内容を受け取る
Route::post('/contacts', [ContactController::class, 'store']);

//confirmの修正ボタンでcontactに戻る処理
Route::get('/contacts/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// //register.blade.phpを表示させる、登録ページ表示
// Route::get('/register', [RegisterController::class, 'register']);
// //登録処理
// Route::post('register/admin', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// //login.blade.phpを表示させる、ログインページ表示
// Route::get('/login', [LoginController::class, 'login']); ←これがFortifyの/loginを壊しているためコメントアウトする
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
//↑Fortify を使用している場合でも、ルーティングを上書きすることで独自のログイン処理が使えます。


//admin.blade.phpを表示させる、管理画面表示
Route::get('/admin', [AdminController::class, 'admin']);
//auth ミドルウェアをつけて、ログイン済みユーザーのみがアクセスできるようにする
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

//thanks.blade.phpを表示させる、サンクスページ表示
Route::view('/thanks', 'thanks');

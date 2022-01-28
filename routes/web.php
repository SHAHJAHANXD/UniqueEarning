<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WatchAddsController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\WithdrawHistoryController;
use App\Http\Controllers\AddsController;

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
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/user-profile', [FrontController::class, 'profile']);
    Route::get('/user-password', [FrontController::class, 'password'])->name('change-password');

Route::get('/logout-user', [FrontController::class, 'logout']);

Route::get('/user-dashboard', [FrontController::class, 'dashboard']);

Route::get('/free-watchadds', [WatchAddsController::class, 'random'])->name('free-watchadds');
Route::get('/watchadds', [WatchAddsController::class, 'random'])->name('watchadds');
Route::get('/start-watchadds', [WatchAddsController::class, 'index'])->name('watchadds');
Route::post('/continue', [WatchAddsController::class, 'continue']);

Route::get('/start-watchadds-free', [WatchAddsController::class, 'free']);

Route::get('/one-dollar-investment', [InvestmentController::class, 'one_dollar']);
Route::post('/one-dollar', [InvestmentController::class, 'one_dollar_send']);
Route::get('/user-investment', [InvestmentController::class, 'invest']);

Route::get('/user-reference', [FrontController::class, 'reference']);
Route::post('/user-reference', [FrontController::class, 'referenceStore']);
Route::get('/user-okay', [FrontController::class, 'saveUserPayment']);
Route::get('/user-okay1', [FrontController::class, 'adds1']);

Route::get('/saveUser', [WithdrawController::class, 'saveUser']);

Route::get('/saveUser-free', [WithdrawController::class, 'saveUserFree']);

Route::get('/withdraw-payment', [WithdrawController::class, 'index']);
Route::get('/withdraw/{email}', [WithdrawController::class, 'edit']);
Route::get('/withdraw-history', [WithdrawController::class, 'history']);
Route::post('/withdraw-amount/{email}', [WithdrawController::class, 'storee']);
Route::post('/withdraw-adds/{email}', [WithdrawController::class, 'adds']);

Route::post('/withdraw-adds-free/{email}', [WithdrawController::class, 'adds_free']);

Route::get('/two-dollar-investment', [InvestmentController::class, 'two_dollar']);
Route::post('/two-dollar', [InvestmentController::class, 'two_dollar_send']);

Route::get('/saveUserId1/{email}',[FrontController::class, 'saveUserId1']);

Route::post('/new-add', [WatchAddsController::class, 'store']);
Route::post('/new-add-free/{email}', [WatchAddsController::class, 'store_free']);

Route::get('/three-dollar-investment', [InvestmentController::class, 'three_dollar']);
Route::post('/three-dollar', [InvestmentController::class, 'three_dollar_send']);

Route::post('/update-password', [FrontController::class, 'updatePassword']);

Route::get('/sendResetEmail1', [FrontController::class, 'sendResetEmail1']);
Route::get('/saveUserId', [FrontController::class, 'saveUserId']);

});

Route::get('/', [FrontController::class, 'index']);
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::get('/register', [FrontController::class, 'register']);
Route::get('/about-us', [FrontController::class, 'about']);
Route::get('/contact-us', [FrontController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'reach_us']);
Route::get('/forget-password', [FrontController::class, 'forget']);
Route::post('/checkemail', [FrontController::class, 'checkemail']);

Route::get('/make-deposit', [FrontController::class, 'deposit']);

Route::post('/add-user', [FrontController::class, 'store']);
Route::post('/add-user/{id}', [FrontController::class, 'store']);

Route::post('/login-user', [FrontController::class, 'authenticate']);

Route::post('/withdraw-payment-user', [WithdrawHistoryController::class, 'storee']);

Route::get('/user-status-1/{id}', [FrontController::class, 'status1']);

Route::get('/password/reset/{token}', [FrontController::class, 'reset_form']);
Route::post('/updatePass', [FrontController::class, 'resetPassword']);

Route::get('/update-status-1/{id}', [FrontController::class, 'status_one']);
Route::get('/update-status-0/{id}', [FrontController::class, 'status_zero']);

Route::get('/update-invest-status-1/{id}', [InvestmentController::class, 'status_one']);
Route::get('/update-invest-status-0/{id}', [InvestmentController::class, 'status_zero']);

Route::get('/update-statuss-1/{id}', [FrontController::class, 'status_one1']);
Route::get('/update-statuss-0/{id}', [FrontController::class, 'status_zero0']);

  Route::group(['middleware' => 'auth:admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/users', [AdminController::class, 'users']);
        Route::get('/request-applications', [AdminController::class, 'request']);
        Route::get('/logout-admin', [AdminController::class, 'logout']);
        Route::get('/user-messages', [AdminController::class, 'message']);
        Route::get('/user-adds', [AdminController::class, 'index']);
        Route::get('/add-adds', [AddsController::class, 'index']);
        Route::get('/add-adds-table', [AddsController::class, 'table']);
        Route::get('/add-delete/{id}', [AddsController::class, 'destroy']);
        Route::post('/add-adds', [AddsController::class, 'store']);
        Route::get('/withdraw-requests', [WithdrawController::class, 'view']);
        Route::get('/withdraw-payment', [WithdrawController::class, 'payment']);
        Route::get('/add-new-withdraw-payment', [WithdrawController::class, 'new']);
        Route::post('/priceee', [WithdrawController::class, 'store']);
        Route::post('/priceee/{id}', [WithdrawController::class, 'store']);
        Route::get('/Withdraw-edit/{id}', [WithdrawController::class, 'edit']);


        Route::get('/withdraw_status1/{id}', [WithdrawController::class, 'status1']);
        Route::get('/withdraw_status0/{id}', [WithdrawController::class, 'status0']);

    });
 });
 Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
 Route::post('/admin/loginn', [AdminController::class, 'authenticateAdmin'])->name('admin.loginn');



<?php

use App\Http\Controllers\SellerController;
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

Route::get('/', [SellerController::class, 'viewSellerSignUpPage'])->name('signup');
Route::post('/', [SellerController::class, 'verifySignup'])->name('signup');
Route::get('/login', [SellerController::class, 'viewSellerLogInPage'])->name('login');
Route::post('/login', [SellerController::class, 'verifyLogin'])->name('login');
Route::get('/home', [SellerController::class, 'viewSellerHomePage'])->name('home')->middleware('loginAuthentication');
Route::get('/add_product', [SellerController::class, 'addSellerProductPage'])->name('add_product')->middleware('loginAuthentication');
Route::post('/add_product', [SellerController::class, 'verifyProduct'])->name('add_product')->middleware('loginAuthentication');

Route::get('/show_product', [SellerController::class, 'viewProductPage'])->name('show_product')->middleware('loginAuthentication');

Route::get('/view_single_product/{p_id}', [SellerController::class, 'showSingleProduct'])->name('show_single_product')->middleware('loginAuthentication');
Route::get('/profile', [SellerController::class, 'profilePage'])->name('profile')->middleware('loginAuthentication');
Route::get('/delete_single_product/{p_id}', [SellerController::class, 'deleteProduct'])->name('delete_single_product')
    ->middleware('loginAuthentication');
Route::post('/profileUpdate', [SellerController::class, 'profileUpdate'])->name('profileUpdate')
    ->middleware('loginAuthentication');
Route::post('/updateProduct', [SellerController::class, 'updateProduct'])->name('updateProduct')
    ->middleware('loginAuthentication');

Route::get('/logout', [SellerController::class, 'sellerLogout'])->name('logout');



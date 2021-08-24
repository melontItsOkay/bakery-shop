<?php

use App\Http\Controllers\Shop;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\BaseWebsite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;

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

Route::get('/', [BaseWebsite::class,'index'])->name('base');
Route::get('/product/{slug}', [BaseWebsite::class, 'product'])->name('base.product');
Route::get('/about-us', [BaseWebsite::class, 'aboutus'])->name('base.aboutus');

Route::get('/login', [Authentication::class, 'index'])->name('authentication')->middleware('guest');
Route::post('/login', [Authentication::class, 'auth'])->name('auth');

Route::get('/register', [Authentication::class, 'register']);
Route::post('/register', [Authentication::class, 'store'])->name('reg');

Route::get('/my-account', [Dashboard::class, 'index'])->name('dashboard')->middleware('auth');
Route::post('/update', [Dashboard::class, 'update'])->name('dashboard.update')->middleware('auth');
Route::get('/my-order', [Dashboard::class, 'myorder'])->name('dashboard.myorder')->middleware('auth');
Route::get('/logout', [Dashboard::class, 'logout']);

Route::get('/shop/all', [Shop::class, 'index'])->name('shop.base');

Route::get('admin/page', [Dashboard::class, 'adminpages'])->name('admins')->middleware('is_admin');

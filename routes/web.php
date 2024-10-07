<?php

use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('register', [AuthController::class, 'showFormRegister'])->name('showFormRegister');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/product/detail/{id}', [ProductController::class, 'chiTietSanPham'])->name('products.detail');


//Cart
Route::get('/list-cart',                [CartController::class, 'listCart'])->name('cart.list');
Route::post('/add-to-cart',             [CartController::class, 'addCart'])->name('cart.add');
Route::post('/update-cart',             [CartController::class, 'updateCart'])->name('cart.update');


// Route ADMIN
Route::middleware(['auth', 'auth.admin'])->prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admins.dashboard');
        })->name('dashboard');

        // Route Danh mục
        Route::resource('danhmucs', DanhMucController::class);

        Route::resource('sanphams', SanPhamController::class);
    });

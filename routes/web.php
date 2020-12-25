<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
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
//*/

Route::prefix('/login')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login.show');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'store'])->name('login.store');
    Route::post('/login', [AuthController::class, 'checkLogin'])->name('login.checkLogin');
    Route::post('/logOut', [AuthController::class, 'logout'])->name('logout');
    Route::get('/logOutAdmin', [AuthController::class, 'logoutAdmin'])->name('logout.logoutAdmin');
});


Route::prefix('admin')->group(function () {
    Route::get('/', [UserController::class, 'showPageAdmin'])->name('admin');

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/create', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('/{id}/edit', [ProductController::class, 'update'])->name('product.update');
        Route::get('/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
        Route::post('/search', [ProductController::class, 'search'])->name('product.search');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/{id}/edit', [UserController::class, 'update'])->name('user.update');
        Route::post('/{id}/edit', [UserController::class, 'editRole'])->name('user.editRole');
    });

    Route::prefix('type')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('type.index');
        Route::get('/create', [TypeController::class, 'create'])->name('type.create');
        Route::post('/create', [TypeController::class, 'store'])->name('type.store');
        Route::get('/{id}/edit', [TypeController::class, 'edit'])->name('type.edit');
        Route::post('/{id}/edit', [TypeController::class, 'update'])->name('type.update');
        Route::get('/{id}/destroy', [TypeController::class, 'destroy'])->name('type.destroy');
        Route::post('/search', [TypeController::class, 'search'])->name('type.search');
    });

    Route::prefix('product-detail')->group(function () {
        Route::get('/', [ProductDetailController::class, 'index'])->name('productDetail.index');
        Route::get('/create', [ProductDetailController::class, 'create'])->name('productDetail.create');
        Route::post('/create', [ProductDetailController::class, 'store'])->name('productDetail.store');
        Route::get('/{product_id}/edit', [ProductDetailController::class, 'edit'])->name('productDetail.edit');
        Route::post('/{product_id}/edit', [ProductDetailController::class, 'update'])->name('productDetail.update');
        Route::get('/{product_id}/destroy', [ProductDetailController::class, 'destroy'])->name('productDetail.destroy');
        Route::post('/search', [ProductDetailController::class, 'search'])->name('productDetail.search');
    });

    Route::prefix('customer')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('/create', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::post('/{id}/edit', [CustomerController::class, 'update'])->name('customer.update');
        Route::get('/{id}/destroy', [CustomerController::class, 'destroy'])->name('customer.destroy');
        Route::post('/search', [CustomerController::class, 'search'])->name('customer.search');
    });

    Route::prefix('/Order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('Order.index');
        Route::get('/{id}/edit', [OrderController::class, 'edit'])->name('Order.edit');
        Route::post('/{id}/edit', [OrderController::class, 'update'])->name('Order.update');
    });
});


//Home User

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('/Shop')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('shopGrid');
        Route::get('/iPhone', [SearchController::class, 'searchIphone'])->name('iphone');
        Route::get('/iPad', [SearchController::class, 'searchIpad'])->name('iPad');
        Route::get('/MacBook', [SearchController::class, 'searchMacBook'])->name('MacBook');
        Route::get('/Apple-Watch', [SearchController::class, 'searchAppleWatch'])->name('Apple-Watch');
        Route::post('/search', [SearchController::class, 'search'])->name('search');
    });

    Route::post('check-Out', [OrderController::class, 'store'])->name('checkOut.store');

    Route::prefix('Cart')->group(function () {
        Route::get('/', [ShoppingCartController::class, 'index'])->name('cart.showCart');
        Route::get('/checkOut', [ShoppingCartController::class, 'checkOut'])->name('cart.showCheckOut');
        Route::middleware('auth')->get('/add-to-cart/{id}', [ShoppingCartController::class, 'addToCart'])->name('cart.addToCart');
        Route::get('/remove-to-cart/{id}', [ShoppingCartController::class, 'removeProductIntoCart'])->name('cart.removeProductIntoCart');
        Route::post('/update-to-cart/{id}', [ShoppingCartController::class, 'updateProductIntoCart'])->name('cart.updateProductIntoCart');
    });

    Route::get('Contact', function () {
        return view('font-end.contact');
    })->name('contact');

});




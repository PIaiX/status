<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceProductController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::group([
        'prefix' => 'admin',
    ], function() {
        Route::group(['middleware' => 'is_admin'], function() {
            Route::get('/home', [OrderController::class, 'index'])->name('home');

            Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
            Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
            Route::post('/orders/delete/{order}', [OrderController::class, 'delete'])->name('orders-delete');
        });

        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('service-products', ServiceProductController::class);
        Route::resource('offers', OfferController::class);
        Route::resource('team', AdminTeamController::class);
        Route::resource('about', AdminAboutController::class);
        Route::resource('contact', AdminContactController::class);
    });
});

Route::group([
    'prefix' => 'basket'
], function() {
    Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');
    Route::get('/', [BasketController::class, 'basket'])->name('basket');
    Route::post('/trash/{id}', [BasketController::class, 'basketTrash'])->name('basket-trash');
    Route::post('/confirm', [BasketController::class, 'basketConfirm'])->name('basket-confirm');
    Route::get('/order', [BasketController::class, 'basketPlace'])->name('basket-order');
    Route::post('/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('get-logout');

Route::get('/offers', [OffersController::class, 'index'])->name('offers');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{serviceAlias?}', [ServicesController::class, 'service'])->name('service-page');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team/{person?}', [TeamController::class, 'show'])->name('team-show');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/search', [CatalogController::class, 'search'])->name('search');
Route::get('/sorted', [CatalogController::class, 'sort'])->name('sorted');
Route::get('/catalog/{categoryAlias?}', [CatalogController::class, 'productByCatalog'])->name('catalog-show');
Route::get('/catalog/{category?}/{product?}', [CatalogController::class, 'show'])->name('product');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/{categoryAlias?}', [IndexController::class, 'index'])->name('category-home');

<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/redirect', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'prodotto']);
route::get('/', [HomeController::class, 'index']);
route::get('/search', [HomeController::class, 'search']);



route::get('/product', [AdminController::class, 'products']);
route::get('/showproduct', [AdminController::class, 'showproducts']);
route::post('/create', [AdminController::class, 'create']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);


route::post('/addcart/{id}', [HomeController::class, 'addcart']);
route::get('/showcart', [HomeController::class, 'showcart']);


route::get('/deletcart/{id}', [HomeController::class, 'deletcart']);

route::post('/order', [HomeController::class, 'confirmOrder']);



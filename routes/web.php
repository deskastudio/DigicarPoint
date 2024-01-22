<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\blogControllers;
use App\http\controllers\katalogControllers;
use App\http\controllers\SessionController;
use App\http\controllers\produkShow;
use App\http\controllers\SelengkapnyaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/produk', [produkShow::class, 'showData']);

Route::get('/blogspot', [BlogControllers::class, 'tampilData']);

Route::get('/selengkapnya', [SelengkapnyaController::class, 'showSelengkapnya']);
Route::get('/selengkapnya/{id_blog}', [SelengkapnyaController::class, 'selengkapnya']);

// Route::get('/tentangKami', function () {
//     return view('tentangKami');
// });

// Route::get('/selengkapnya', function () {
//     return view('selengkapnya');
// });

// Route::get('/selengkapnya', function () {
//     return view('selengkapnya');
// });

// Route untuk proses CRUD katalog
Route::resource('katalog', katalogControllers::class)->middleware('isLogin');
// Route Session
Route::get('/sesi', [SessionController::class,'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class,'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class,'logout']);

//Route untuk Session Register
Route::get('/sesi/register', [SessionController::class,'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class,'create'])->middleware('isTamu');


// Route untuk proses CRUD blog
Route::resource('blog', blogControllers::class)->middleware('isLogin');

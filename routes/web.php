<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtalaseController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('home', ['title' => 'Dashboard']);
// })->name('home');

Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('/', [HomeController::class, 'home'])->middleware('auth');


Route::resource('etalase', EtalaseController::class)->middleware('auth');

Route::get('etalase/product/{id}', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('etalase/product/{id}/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('etalase/product/{id}/product', [ProductController::class, 'store'])->middleware('auth');
Route::get('etalase/product/{id}/edit/{id_product}', [ProductController::class, 'edit'])->middleware('auth');
Route::put('product-edit/{id_product}', [ProductController::class, 'update'])->middleware('auth');
Route::get('etalase/product/{id}/delete/{id_product}', [ProductController::class, 'destroy'])->middleware('auth');

Route::get('history', [HistoryController::class, 'index'])->middleware('auth');

Route::get('transaksi', [LaporanController::class, 'index'])->middleware('auth');
Route::get('transaksi/create', [LaporanController::class, 'create'])->middleware('auth');
Route::post('transaksi/laporan', [LaporanController::class, 'store'])->middleware('auth');
Route::get('transaksi/edit/{id}', [LaporanController::class, 'edit'])->name('transaksi.edit')->middleware('auth');
Route::put('transaksi-edit/{id}', [LaporanController::class, 'update'])->middleware('auth');
Route::get('transaksi/delete/{id}', [LaporanController::class, 'destroy'])->middleware('auth');


Route::get('/forecasting', function () {
    $client = new \GuzzleHttp\Client();

    // melakukan request GET ke API Flask
    // $response = $client->request('GET', 'http://192.168.225.77:5000/prediksi');
    $response = $client->request('GET', 'http://127.0.0.1:5000/prediksi');

    // mengambil data JSON dari response
    $data = json_decode($response->getBody(), true);

    return view('forecasting/index', ['title' => 'Forecasting', 'data' => $data]);
})->middleware('auth');

Route::get('forecasting/detail-hasil', function () {
    $client = new \GuzzleHttp\Client();

    // melakukan request GET ke API Flask
    // $response = $client->request('GET', 'http://192.168.225.77:5000/prediksi');
    $response = $client->request('GET', 'http://127.0.0.1:5000/prediksi');

    // mengambil data JSON dari response
    $data = json_decode($response->getBody(), true);

    return view('forecasting/detail_hasil', ['title' => 'Detail Hasil Prediksi', 'data' => $data]);
})->name('detail-hasil')->middleware('auth');

Route::get('register', [AdminController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [AdminController::class, 'register_action'])->name('register.action')->middleware('guest');

Route::get('register2', [AdminController::class, 'register2'])->name('register2');
Route::post('register2', [AdminController::class, 'register_action2'])->name('register.action2');

Route::get('login', [AdminController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AdminController::class, 'login_action'])->name('login.action')->middleware('guest');

Route::get('password', [AdminController::class, 'password'])->name('password');
Route::post('password', [AdminController::class, 'password_action'])->name('password.action');

Route::get('logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/laporan/pdf', [LaporanController::class, 'generatePDF'])->name('laporan.pdf');

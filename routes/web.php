<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/birth-certificate', [HomeController::class, 'birthcertificate'])->name('birthcertificate');
Route::get('/death-certificate', [HomeController::class, 'deathcertificate'])->name('deathcertificate');
Route::get('/cookie', [HomeController::class, 'cookie'])->name('cookie');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/process-to-obtain-a-certificate', [HomeController::class, 'how_to_get_birth'])->name('how_to_get_birth');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('refund');
Route::get('/Privacy-Policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-use', [HomeController::class, 'terms'])->name('terms');

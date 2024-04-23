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
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/how-to-obtain-a-copy', [HomeController::class, 'how_to_obtain_a_copy'])->name('home.how-to-obtain-a-copy');
Route::get('/what-is-a-vital-record', [HomeController::class, 'what_is_a_vital_record'])->name('home.what-is-a-vital-record');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/birth-certificate', [HomeController::class, 'birthcertificate'])->name('birthcertificate');
Route::get('/death-certificate', [HomeController::class, 'deathcertificate'])->name('deathcertificate');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');

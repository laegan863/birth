<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DeathCertificateController;
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
Route::get('/success/{trans_id}', [HomeController::class, 'success'])->name('home.success');
Route::post('/death-certificate-form/{type}/store', [DeathCertificateController::class, 'store'])->name('death.form_store');
Route::get('/death-certificate-form/{type}', [HomeController::class, 'death_certificate_form'])->name('home.death_form');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/how-to-obtain-a-copy', [HomeController::class, 'how_to_obtain_a_copy'])->name('home.how-to-obtain-a-copy');
Route::get('/what-is-a-vital-record', [HomeController::class, 'what_is_a_vital_record'])->name('home.what-is-a-vital-record');


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/birth-certificate', [HomeController::class, 'birthcertificate'])->name('home.birthcertificate');
Route::get('/death-certificate', [HomeController::class, 'deathcertificate'])->name('home.deathcertificate');
Route::get('/cookie', [HomeController::class, 'cookie'])->name('home.cookie');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('home.faqs');
Route::get('/process-to-obtain-a-certificate', [HomeController::class, 'how_to_get_birth'])->name('home.how_to_get_birth');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('home.refund');
Route::get('/Privacy-Policy', [HomeController::class, 'privacy'])->name('home.privacy');
Route::get('/terms-of-use', [HomeController::class, 'terms'])->name('home.terms');

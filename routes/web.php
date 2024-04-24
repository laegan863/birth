<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/birth-certificate', [HomeController::class, 'birthcertificate'])->name('home.birthcertificate');
Route::get('/death-certificate', [HomeController::class, 'deathcertificate'])->name('home.deathcertificate');
Route::get('/cookie', [HomeController::class, 'cookie'])->name('home.cookie');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('home.faqs');
Route::get('/process-to-obtain-a-certificate', [HomeController::class, 'how_to_get_birth'])->name('home.how_to_get_birth');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('home.refund');
Route::get('/Privacy-Policy', [HomeController::class, 'privacy'])->name('home.privacy');
Route::get('/terms-of-use', [HomeController::class, 'terms'])->name('home.terms');

// birth form
Route::get('/birth/form/{type}', [FormController::class, 'birth_page'])->name('form.birthpage');
Route::get('/birth-certificate-form/', [FormController::class, 'birth_form1'])->name('form.birth');
Route::post('/birth-certificate/form/submitted', [FormController::class, 'submit_form'])->name('form.submit.birth.form');

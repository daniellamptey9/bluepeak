<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Services Routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/services/category/{category}', [ServicesController::class, 'category'])->name('services.category');
Route::get('/service/{slug}', [ServicesController::class, 'service'])->name('service.detail');
Route::get('/cloud-services', [ServicesController::class, 'cloudServices'])->name('services.cloud');
Route::get('/sectors', [ServicesController::class, 'sectors'])->name('services.sectors');

// About Routes
Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about.us');
Route::get('/careers', [AboutController::class, 'careers'])->name('careers');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MetaController,TestimonialController,ServicesController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [MetaController::class,'admin'])->name('admin.index');

Route::prefix('meta')->group(function () {
    Route::get('/', [MetaController::class,'index'])->name('meta.index');
    Route::get('/create', [MetaController::class,'create'])->name('meta.create');
    Route::post('/store', [MetaController::class,'store'])->name('meta.store');
    Route::get('/edit/{id}', [MetaController::class,'edit'])->name('meta.edit');
    Route::post('/update/{id}', [MetaController::class,'update'])->name('meta.update');
    Route::get('/delete/{id}', [MetaController::class,'destroy'])->name('meta.delete');
});



Route::prefix('services')->group(function () {
    Route::get('/', [ServicesController::class,'index'])->name('services.index');
    Route::get('/create', [ServicesController::class,'create'])->name('services.create');
    Route::post('/store', [ServicesController::class,'store'])->name('services.store');
    Route::get('/edit/{id}', [ServicesController::class,'edit'])->name('services.edit');
    Route::post('/update/{id}', [ServicesController::class,'update'])->name('services.update');
    Route::get('/delete/{id}', [ServicesController::class,'destroy'])->name('services.delete');
});



Route::prefix('testimonial')->group(function () {
    Route::get('/', [TestimonialController::class,'index'])->name('testimonial.index');
    Route::get('/create', [TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('/store', [TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('/edit/{id}', [TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::post('/update/{id}', [TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('/delete/{id}', [TestimonialController::class,'destroy'])->name('testimonial.delete');
});

});

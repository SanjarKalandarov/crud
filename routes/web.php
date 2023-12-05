<?php

use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\ViewController::class,'index'])->name('index');
Route::get('about',[\App\Http\Controllers\ViewController::class,'about'])->name('about');
Route::get('/show/{id}',[\App\Http\Controllers\ViewController::class,'show'])->name('brand.show');
Route::get('brand',[\App\Http\Controllers\ViewController::class,'brand'])->name('brand');
Route::get('contact',[\App\Http\Controllers\ViewController::class,'contact'])->name('contact');
Route::get('special',[\App\Http\Controllers\ViewController::class,'special'])->name('special');



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
  Route::resource('contact',\App\Http\Controllers\ContactController::class);
  Route::resource('brand',\App\Http\Controllers\BrendController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

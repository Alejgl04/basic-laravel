<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', HomeController::class)->name('home');

Route::resource('courses', CourseController::class);

Route::view('nosotros','us')->name('us');

Route::get('contactus', [ContactController::class, 'index'])->name('contactus.index');

Route::post('contactus', [ContactController::class, 'store'])->name('contactus.store');
// Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
// Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
// Route::post("courses", [CourseController::class, 'store'])->name('courses.store');
// Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');
// Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
// Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update');
// Route::delete('courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');





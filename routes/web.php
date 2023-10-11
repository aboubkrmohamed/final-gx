<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('it_division', [HomeController::class, 'itDivision'])->name('itDivision');
Route::get('project_division', [HomeController::class, 'projectDivision'])->name('projectDivision');
Route::get('education', [HomeController::class, 'education'])->name('education');
Route::get('software', [HomeController::class, 'software'])->name('software');
Route::get('success_story', [HomeController::class, 'successStory'])->name('successStory');
Route::get('hardware', [HomeController::class, 'hardware'])->name('hardware');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contactSubmit'])->name('contact-submit');

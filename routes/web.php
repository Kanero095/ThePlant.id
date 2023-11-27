<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/plants', function () {
    return view('user.plants');
});

Route::get('/preserveplant', function () {
    return view('user.preserveplant');
});

Route::get('/plant-commerce', function () {
    return view('user.commerce');
});

Route::get('/about', function () {
    return view('user.about_Cont');
});

Route::get('/faq', function () {
    return view('user.faq');
});

Route::resource('plant', PlantController::class);
Route::get('plant/read/{id}', [PlantController::class, 'read'])->name('plant.read');


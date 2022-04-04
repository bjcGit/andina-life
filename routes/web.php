<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\App;

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

// Route::get('/', function () {
//     return view('welcome');

// });
Route::get('', [homeController::class, 'index'])->name('home');
Route::resource('mail', mailController::class)->names('mail');

Route::get("pdf", function () {
    $pathtoFile = public_path() . '/assets/pdf.pdf';
    return response()->download($pathtoFile);
});

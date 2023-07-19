<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteController;

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
    return view('welcome');
});
Route::post('/updateCarte', [CarteController::class, 'requestToUpdate'])->name('updateCarte');
Route::get('/test', function () {
    return view('test/testCarte');
});
Route::post('/lostCarte', [CarteController::class, 'carteLost'])->name('carteLost');
Route::middleware('auth')->get('/confirmationToRedoCarte/{carte}', [CarteController::class, 'confirmationToRedoCarte'] )->name('confirmationToRedoCarte');
Route::resource('cartes', CarteController::class);
Route::get('/zetcha-cards/ZTA{carte:numeroZ}', [CarteController::class, 'view'])->name('view');
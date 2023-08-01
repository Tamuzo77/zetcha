<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PricingController;

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
// -------------------------frontend---------------------------------------
Route::get( '/index', [IndexController::class, 'index']);
Route::get( '/pricing', [PricingController::class,'pricing']);
//----------------------------------------------------------------

Route::get('/', function () {
    return view('welcome');
});
Route::post('/updateCarte', [CarteController::class, 'requestToUpdate'])->name('updateCarte');
Route::get('/test', function () {
    return view('test/testCarte');
});
Route::post('/lostCarte', [CarteController::class, 'carteLost'])->name('carteLost');
Route::group([],function() {
    Route::get('/confirmationToRedoCarte/{carte}', [CarteController::class, 'confirmationToRedoCarte'])->name('confirmationToRedoCarte');
    Route::get('/sendEmailToUpdate/{carte:numeroZ}', [CarteController::class, 'sendEmailToUpdate'])->name('sendEmailToUpdate');
});
Route::resource('cartes', CarteController::class);
Route::get('/zetcha-cards/ZTA{carte:numeroZ}', [CarteController::class, 'view'])->name('view');
Route::get('/z-edit/{carte}', [CarteController::class, 'edit'])->name('z-edit');

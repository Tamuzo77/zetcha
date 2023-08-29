<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\InscriptionController;

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
<<<<<<< HEAD
Route::get( '/pricing', [PricingController::class,'pricing']);
Route::get( '/inscription', [InscriptionController::class,'inscription']);
Route::get( '/page', [PageController::class,'page']);
Route::get( '/about', [AboutController::class,'about']);
=======
Route::get( '/pricingtest', [PricingController::class,'pricing']);
>>>>>>> 708042e00009fada2f901de6e7420dfc1c70d3b6
//----------------------------------------------------------------

Route::get('/', function () {
    return view('index');
});
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
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

Route::get('/ActiveStorage', function () {
    Artisan::call('storage:link');
    $resultat = Artisan::output();
     $search = 'already';
     $error = 'Lien symbolique existant, Bien vouloir vérifier le contenu !';


    if(strpos($resultat, $search) === false) {
        return redirect()->back()->with('success', $resultat);

    }else{
       return redirect()->back()->with('error', $error);
    }


  })->name('active_storage');


  // Purger tous les caches à une opération unique
  Route::get('/ClearCache', function()  {
    Artisan::call('optimize:clear');
    $resultat = Artisan::output();
    $search = 'successfully';
    $error = 'Echec de nettoyage de caches';


    if(strpos($resultat, $search) === false) {
      return redirect()->back()->with('success', $resultat);

  }else{
     return redirect()->back()->with('error', $error);
  }

  })->name('vider_cache');

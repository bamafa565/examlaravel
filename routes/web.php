<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashbordController,
PersonnelController,
MedicamentController,
PatientController,CategorieController,
CommandesController
,ConsultationController
,StockController,
VenteController,
CommandeCourController,
venduController,consController,
VendeurController,
LoginVendeurControleur
};
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
//
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashbord',[DashbordController::class,'index'])->name('dashbord');


Route::resource('personnel',PersonnelController::class);
Route::resource('Medicament',MedicamentController::class);
Route::get('/categorie',[CategorieController::class,'index'])->name('categorie');

Route::resource('patients',PatientController::class);
Route::resource('commande',CommandesController::class);
Route::resource('commandes',CommandeCourController::class);
Route::resource('consultation',ConsultationController::class);
Route::resource('cons',consController::class);
Route::resource('stock',StockController::class);
 Route::resource('vente',VenteController::class);
  Route::resource('vendeur',VendeurController::class);

Route::get('/stock',[StockController::class,'index'])->name('stock');
//login vendeur
Route::post('/loginvendeur',[LoginVendeurControleur::class,'store'])->name('loginvendeur');

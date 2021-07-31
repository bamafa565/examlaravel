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

Route::get('/personnel/destroy/{id}',[PersonnelController::class,'destroy'])->name('personnel.destroy');
Route::get('/personnel/edit/{id}',[PersonnelController::class,'edit'])->name('personnel.edit');
Route::get('/personnel/create',[PersonnelController::class,'create'])->name('personnel.create');
Route::post('/personnel/create',[PersonnelController::class,'store'])->name('personnel.store');
Route::post('/personnel/edit',[PersonnelController::class,'update'])->name('personnel.update');

Route::get('/personnel',[PersonnelController::class,'index'])->name('personnel');
Route::get('/personnel/layout',[PersonnelController::class,'index'])->name('personnel/layout');
//Route::get('/personnel/show',[PersonnelController::class,'index'])->name('personnel');

//medicaments                   😎😎😎😎😎😎😎😎😎
//medicaments                   😎😎😎😎😎😎😎😎😎
//medicaments                   😎😎😎😎😎😎😎😎😎
//medicaments                   😎😎😎😎😎😎😎😎😎
Route::get('/Medicament/destroy/{id}',[MedicamentController::class,'destroy'])->name('Medicament.destroy');
Route::get('/Medicament/edit/{id}',[MedicamentController::class,'edit'])->name('Medicament.edit');
Route::get('/Medicament/create',[MedicamentController::class,'create'])->name('Medicament.create');
Route::post('/Medicament/create',[MedicamentController::class,'store'])->name('Medicament.store');
Route::post('/Medicament/edit',[MedicamentController::class,'update'])->name('Medicament.update');
Route::get('/Medicament',[MedicamentController::class,'index'])->name('Medicament');
Route::get('/Medicament/layout',[MedicamentController::class,'index'])->name('Medicament/layout');

Route::get('/categorie',[CategorieController::class,'index'])->name('categorie');
Route::get('/pagi',[PageController::class,'index'])->name('categorie');

//Route::get('/Medicament/create',[MedicamentController::class,'create'])->name('Medicament.create');
///patients
///patients
///patients
///patients
Route::get('/patients/edit/{id}',[PatientController::class,'edit'])->name('patients.edit')->wherenumber('id');
Route::get('/patients/destroy/{id}',[PatientController::class,'destroy'])->name('patients.destroy')->wherenumber('id');
//::get('/patients/{id}',[PatientController::class,'show'])->name('patients.show')->wherenumber('id');
Route::get('/patients/create',[PatientController::class,'create'])->name('patients.create');
Route::post('/patients/create',[PatientController::class,'store'])->name('patients.store');
Route::get('/patients',[PatientController::class,'index'])->name('patient');
Route::get('/patients/layout',[PatientController::class,'index'])->name('patients/layout');


// Route::get('/ordonance',[PatientController::class,'index'])->name('ordonance');
 Route::get('/commande',[CommandesController::class,'index'])->name('commande');
 Route::get('/commande/new',[CommandesController::class,'create'])->name('commande.new');
 Route::post('/commande/store',[CommandesController::class,'store'])->name('commande.store');
 Route::get('/commande/ToDo',[CommandesController::class,'store'])->name('commande.ToDo');
 Route::get('/commande/encour',[CommandeCourController::class,'index'])->name('commande.encour');
 Route::get('/consultation',[ConsultationController::class,'index'])->name('consultation');
 Route::post('/consultation/store',[ConsultationController::class,'store'])->name('consultation.store');
 Route::get('/consultation/list',[consController::class,'index'])->name('consultation.list');
 Route::get('/stock',[StockController::class,'index'])->name('stock');
 Route::get('/vente',[VenteController::class,'index'])->name('vente');
 Route::get('/vente/create',[VenteController::class,'create'])->name('vente.create');
 Route::get('/vente/show',[venduController::class,'index'])->name('vente.show');
 Route::post('/vente/create',[VenteController::class,'store'])->name('vente.store');
// Route::get('/stock',[StockController::class,'index'])->name('stock');
 Route::get('/vendeur',[VendeurController::class,'index'])->name('vendeur');
 Route::post('/vendeur.store',[VendeurController::class,'store'])->name('vendeur.store');
 Route::get('/vendeur.create',[VendeurController::class,'create'])->name('vendeur.create');

//login vendeur
Route::post('/loginvendeur',[LoginVendeurControleur::class,'authenticate'])->name('loginvendeur');

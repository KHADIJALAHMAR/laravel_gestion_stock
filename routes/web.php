<?php
use App\Http\Controllers\ProduitController;
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

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/produit', [ProduitController::class, 'index'])->name('produit');
 Route::get('/create',[ProduitController::class,'create'])->name('create');
 Route::post('/store',[ProduitController::class,'store'])->name('store');
 Route::get('/edit/{id}',[ProduitController::class,'edit'])->name('edit');
 Route::post('/update',[ProduitController::class,'update'])->name('update');
 Route::get('/delete/{id}',[ProduitController::class,'delete'])->name('delete');

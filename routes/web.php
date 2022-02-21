<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\ImageController;
use App\Models\User;
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


//back
Route::middleware('auth')->group(function () {
    //dashboard
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/utilisateur',[DashboardController::class, 'utilisateur'])->name('utilisateur');
    Route::get('/dashboard/avatar',[DashboardController::class, 'avatar'])->name('avatar');
    Route::post('/dashboard',[DashboardController::class, 'profileUpdate'])->name('profileUpdate');
    //add avatar in dashboard
    Route::post("/dashboard/store", [DashboardController::class, "store"])->name("dashboard.store");
    Route::delete("/dashboard/{avatar}/delete", [DashboardController::class, "destroy"])->name("dashboard.destroy");


    //ressources categorie
    Route::resource('/dashboard/categorie', CategorieController::class)->middleware(['isAdmin']);
    //ressources image
    Route::resource('/dashboard/image', ImageController::class);
    //ressources gallerie
    Route::resource('/dashboard/gallerie', GallerieController::class);
});

require __DIR__.'/auth.php';


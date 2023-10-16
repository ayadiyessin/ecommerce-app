<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\CategorieController; // appel ll controler mta categorie


Route::middleware('api')->group(function () { // route pour le classe categorie yani hetha route mta les methode lkol fi controler
    Route::resource('categories', CategorieController::class); // route mte3hom "http://127.0.0.1:8000/api/categories"
    //houwa yaraf wahdou ili get -> hya el  index ...
    // tous les methode ysta3mlou le meme route
});

use App\Http\Controllers\ScategorieController;

Route::middleware('api')->group(function () {
    Route::resource('scategories', ScategorieController::class);
}); // amelna route le sous categorie

Route::get('/scat/{idcat}',[ScategorieController::class,'showSCategorieByCAT']); // 3melna route ll methode get /api/scat/{idcat}
//  donc bech  namlou exeecution mtaa ScategorieControllerw n7ebek tameli execution mta methode showSCategorieByCAT

use App\Http\Controllers\ArticleController;

Route::middleware('api')->group(function () { // bech na3mel route ll article   // middleware yani get w post w put w delate  ... les methode eli definie
    Route::resource('articles', ArticleController::class);
});


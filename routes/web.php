<?php

use Illuminate\Support\Facades\Route;

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

/***********************************hethaaa ll vue js ***************************************** */

Route::get('/{any}', function () { // ay route tjini  bech nbathek ll vews/layout/app.bleade.php
    return view('layout.app'); //nmchyou ta7t l vue  w nsn3ou repertoire layoutr w tahtou fichier app.blade.php
    })->where('any', '.*'); // ay composent bech n7otouwah fi vews/layout/app.bleade.php == layout.app
//=> hethy zedaa t9oli chnia awel page nlansi menha projet
    // spa yani kolchy y sirlou l execution dans une seul page

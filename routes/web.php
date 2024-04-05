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

// rotta per l'homepage
Route::get('/', function () {

    $saluto = "Ciao a tutti!";
    $saluto2 = "Come state?";

    $nomi = ["Gianmarco", "Ignazio", "Pippo", "Topolino"];

    $mostraNomi = false;

    // se vogliamo passare delle variabili alla nostra vista
    // possiamo utilizzare la funzione compact()
    // nel parametro di compact() dobbiamo passare LA STRINGA del nome della variabile
    return view('home', compact("saluto", "saluto2", "nomi", "mostraNomi"));

});


Route::get("/secondaPagina", function() {

    return view("secondaPagina");

})->name('seconda');

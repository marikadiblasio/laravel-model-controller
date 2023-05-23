<?php

use App\Http\Controllers\Guest\PageController;
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

//Aggiungo il metodo View per ritornare solo una view
Route::view('/', 'home')->name('home');
//Aggiungo get con parametri il controller e il metodo index - nomino il percorso
Route::get('/movies', [PageController::class, 'index'])->name('movies.index');

//Per details
Route::get('/movies/{id}', [PageController::class, 'show'])->name('movies.show');

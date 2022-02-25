<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [SiteController::class, 'index'])->name( 'home' );
//Route::get('/portal', [SiteController::class, 'portal'])->name( 'portal' );
//Route::get('/single', [SiteController::class, 'single'])->name( 'single' );
//Route::get('/ebwbank', [SiteController::class, 'ebwbank'])->name( 'ebwbank' );
//Route::get('/cadastro', [SiteController::class, 'cadastro'])->name( 'cadastro' );
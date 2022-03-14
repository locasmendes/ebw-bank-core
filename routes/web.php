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
Route::get('/portal', [SiteController::class, 'portal'])->name( 'portal' );
Route::get('/single', [SiteController::class, 'single'])->name( 'single' );
Route::get('/ebwbank', [SiteController::class, 'ebwbank'])->name( 'ebwbank' );
//Route::get('/cadastro', [SiteController::class, 'cadastro'])->name( 'cadastro' );

// $table->string('title');
// $table->longText('content');
// $table->string('slug')->unique();

// $table->integer('user_id')->unsigned()->index()->comment('author of the post');
// $table->foreign('user_id')->references('id')->on('users');

// $table->timestamps();
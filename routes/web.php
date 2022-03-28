<?php

use App\Http\Controllers\PreRegistrationController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/conheca-o-ebwbank', [SiteController::class, 'ebwbank'])->name('ebwbank');
Route::get('/passou-ganhou', [SiteController::class, 'passedwon'])->name('ebwbank');
Route::get('/portal-do-empreendedor', [SiteController::class, 'portal'])->name('portal');
Route::get('/single', [SiteController::class, 'single'])->name('single');
Route::get('/pre-cadastro', [PreRegistrationController::class, 'index'])->name('pre-registratation');
Route::post('/pre-cadastro', [PreRegistrationController::class, 'store'])->name('pre-registratation.store');

//Route::get('/cadastro', [SiteController::class, 'cadastro'])->name( 'cadastro' );

// Route::get('/cursos/{category:category_slug}/{course:course_slug}')->name()

// $table->string('title');
// $table->longText('content');
// $table->string('slug')->unique();

// $table->integer('user_id')->unsigned()->index()->comment('author of the post');
// $table->foreign('user_id')->references('id')->on('users');

// $table->timestamps();
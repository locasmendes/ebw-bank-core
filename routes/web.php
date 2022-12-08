<?php

use App\Http\Controllers\PartnerInvestorController;
use App\Http\Controllers\PortalEmpreendedorController;
use App\Http\Controllers\PreRegistrationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SejaInvestidorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VendaInternetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TalentController;
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

// Route::get('/', function () {
//     dd(image_url('images/eduardo.png'));
// });
Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/aebw', [SiteController::class, 'ebwbank'])->name('conheca-ebw');
Route::get('/peca-sua-maquininha', [SiteController::class, 'passedwon'])->name('products');
// Route::get('/peca-sua-maquininha', [SiteController::class, 'products'])->name('products');
Route::get('/venda-pela-internet', [VendaInternetController::class, 'index'])->name('venda-internet');
Route::get('/portal-do-empreendedor', [PortalEmpreendedorController::class, 'index'])->name('portal');
Route::get('/portal-do-empreendedor/{id}/{slug}', [PortalEmpreendedorController::class, 'show'])->name('portal.show');
Route::get('/pre-cadastro', [PreRegistrationController::class, 'index'])->name('pre-registratation');
Route::post('/pre-cadastro', [PreRegistrationController::class, 'store'])->name('pre-registratation.store');
Route::get('/socio-investidor', [PartnerInvestorController::class, 'index'])->name('partner-investor');
Route::post('/socio-investidor', [PartnerInvestorController::class, 'store'])->name('partner-investor.store');
Route::get('/seja-um-investidor', [SejaInvestidorController::class, 'index'])->name('seja-investidor');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/cadastro-peca-sua-maquininha', [RegisterController::class, 'index'])->name('cadastro-peca-minha-maquininha');
Route::post('/cadastro-peca-sua-maquininha', [RegisterController::class, 'store'])->name('cadastro-peca-minha-maquininha.store');
Route::get('/banco-talentos', [TalentController::class, 'index'])->name('talent.index');
Route::post('/banco-talentos', [TalentController::class, 'store'])->name('talent.store');
Route::get('/banco-talentos/cadastro-concluido', [TalentController::class, 'success'])->name('talent.success');
Route::get('/privacidade', [SiteController::class, 'privacidade'])->name('privacidade');
Route::get('/termos-e-condicoes-de-uso', [SiteController::class, 'termos'])->name('termos');


Route::middleware('auth')->group(function () {
    Route::post('/banco-talentos/export', [TalentController::class, 'export'])->name('talent.export');
    Route::get('/banco-talentos/pdf/{id}', [TalentController::class, 'pdfExport'])->name('talent.pdf');
    Route::post('/socio-investidor/export', [PartnerInvestorController::class, 'export'])->name('partner-investor.export');
    Route::post('/pre-cadastro/export', [PreRegistrationController::class, 'export'])->name('pre-registratation.export');

    Route::post('cadastro-peca-minha-maquininha/export', [RegisterController::class, 'export'])
        ->name('cadastro-peca-minha-maquininha.export');

    Route::get('cadastro-peca-minha-maquininha/document/{hash}', [RegisterController::class, 'document'])
        ->name('cadastro-peca-minha-maquininha.documento');

    Route::get('/banco-talentos-dev/curriculo/{hash}', [TalentController::class, 'showCurriculo'])->name('talent.curriculo');
});


//Route::get('/cadastro', [SiteController::class, 'cadastro'])->name( 'cadastro' );

// Route::get('/cursos/{category:category_slug}/{course:course_slug}')->name()

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DestaqueController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\TimelineController;

Route::get('/set-cookie', [HttpOnlyCookieController::class, 'setCookie']);
//============== FRONT DO SITE ==============//
Route::get('/', [SiteController::class, 'index'])->name('/');
Route::get('/busca', [SiteController::class, 'busca'])->name('busca');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato.home');
Route::get('/cimento', [SiteController::class, 'cimento'])->name('cimento.home');

// NOTICIAS
Route::get('/blog', [SiteController::class, 'noticias'])->name('noticias.home');
Route::get('/blog/{year}/{month}/{slug}', [SiteController::class, 'detailsNoticias'])->name('noticias.details');

// PÁGINAS
Route::get('/{slug}', [SiteController::class, 'detailsPages'])->name('pages.details');

//============== ADMIN DO SITE ==============//
Route::get('/admin/login', [LoginController::class, 'authRedirect'])->name('admin.login');
Route::post('/admin/auth', [LoginController::class, 'auth'])->name('admin.auth');

// RECUPERAR SENHA
Route::get('/admin/recuperarsenha', [ForgetPasswordController::class, 'index'])->name('admin.recuperarsenha');
Route::post('/admin/recuperarsenha', [ForgetPasswordController::class, 'store'])->name('admin.recuperarsenha.store');
Route::get('/admin/resetarsenha/{token}', [ForgetPasswordController::class, 'edit'])->name('admin.resetarsenha');
Route::post('/admin/resetarsenha', [ForgetPasswordController::class, 'update'])->name('admin.resetarsenha.update');

Route::middleware('auth')->group(function () {
    // PAINEL
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/painel', [PainelController::class, 'index'])->name('admin.painel');
    // CKEDITOR
    Route::post('ckeditor/upload', [PainelController::class, 'upload'])->name('ckeditor.upload');

    // TIME LINE
    Route::get('/admin/timeline', [TimelineController::class, 'index'])->name('admin.timeline.home');

    // USUÁRIO
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.home');
    Route::get('/admin/users/data', [UserController::class, 'getUsers'])->name('admin.users.data');
    Route::delete('/admin/users/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');
    Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

    // CONFIG
    Route::get('/admin/config', [ConfigController::class, 'index'])->name('admin.config.home');
    Route::get('/admin/config/edit/{id}', [ConfigController::class, 'edit'])->name('admin.config.edit');
    Route::put('/admin/config/{id}', [ConfigController::class, 'update'])->name('admin.config.update');
    
    // DESTAQUES
    Route::get('/admin/destaques', [DestaqueController::class, 'index'])->name('admin.destaques.home');
    Route::get('/admin/destaques/data', [DestaqueController::class, 'getDestaques'])->name('admin.destaques.data');
    Route::delete('/admin/destaques/delete/{id}', [DestaqueController::class, 'destroy'])->name('admin.destaques.delete');
    Route::post('/admin/destaques/store', [DestaqueController::class, 'store'])->name('admin.destaques.store');
    Route::get('/admin/destaques/edit/{id}', [DestaqueController::class, 'edit'])->name('admin.destaques.edit');
    Route::put('/admin/destaques/{id}', [DestaqueController::class, 'update'])->name('admin.destaques.update');

    // GALERIAS
    Route::get('/admin/noticias/{noticia}/galerias', [GaleriaController::class, 'index'])->name('admin.galerias.home');
    Route::delete('/galerias/{galeria}', [GaleriaController::class, 'destroyNoticia'])->name('admin.galerias.delete');
    Route::get('/admin/noticias/{noticia}/galerias/create', [GaleriaController::class, 'createNoticia'])->name('admin.galerias.create');
    Route::post('/admin/noticias/{noticia}/galerias/store', [GaleriaController::class, 'storeNoticia'])->name('admin.galerias.store');

    // NOTÍCIAS
    Route::get('/admin/noticias', [NoticiaController::class, 'index'])->name('admin.noticias.home');
    Route::get('/admin/noticias/data', [NoticiaController::class, 'getNoticias'])->name('admin.noticias.data');
    Route::delete('/admin/noticias/delete/{id}', [NoticiaController::class, 'destroy'])->name('admin.noticias.delete');
    Route::post('/admin/noticias/store', [NoticiaController::class, 'store'])->name('admin.noticias.store');
    Route::get('/admin/noticias/edit/{id}', [NoticiaController::class, 'edit'])->name('admin.noticias.edit');
    Route::put('/admin/noticias/{id}', [NoticiaController::class, 'update'])->name('admin.noticias.update');

    // PÁGINAS
    Route::get('/admin/pages', [PageController::class, 'index'])->name('admin.pages.home');
    Route::get('/admin/pages/data', [PageController::class, 'getPages'])->name('admin.pages.data');
    Route::delete('/admin/pages/delete/{id}', [PageController::class, 'destroy'])->name('admin.pages.delete');
    Route::post('/admin/pages/store', [PageController::class, 'store'])->name('admin.pages.store');
    Route::get('/admin/pages/edit/{id}', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::put('/admin/pages/{id}', [PageController::class, 'update'])->name('admin.pages.update');
});
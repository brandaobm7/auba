<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeguroController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\TimelineController;

Route::get('/set-cookie', [HttpOnlyCookieController::class, 'setCookie']);
//============== FRONT DO SITE ==============//
Route::get('/', [SiteController::class, 'index'])->name('/');
Route::get('/busca', [SiteController::class, 'busca'])->name('busca');

// NOTICIAS
Route::get('/blog', [SiteController::class, 'noticias'])->name('noticias.home');

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
    
    // HOME
    Route::get('/admin/homes', [HomeController::class, 'index'])->name('admin.homes.home');
    Route::get('/admin/homes/data', [HomeController::class, 'getHomes'])->name('admin.homes.data');
    Route::delete('/admin/homes/delete/{id}', [HomeController::class, 'destroy'])->name('admin.homes.delete');
    Route::post('/admin/homes/store', [HomeController::class, 'store'])->name('admin.homes.store');
    Route::get('/admin/homes/edit/{id}', [HomeController::class, 'edit'])->name('admin.homes.edit');
    Route::put('/admin/homes/{id}', [HomeController::class, 'update'])->name('admin.homes.update');

    // SEGUROS
    Route::get('/admin/seguros', [SeguroController::class, 'index'])->name('admin.seguros.home');
    Route::get('/admin/seguros/data', [SeguroController::class, 'getSeguros'])->name('admin.seguros.data');
    Route::delete('/admin/seguros/delete/{id}', [SeguroController::class, 'destroy'])->name('admin.seguros.delete');
    Route::post('/admin/seguros/store', [SeguroController::class, 'store'])->name('admin.seguros.store');
    Route::get('/admin/seguros/edit/{id}', [SeguroController::class, 'edit'])->name('admin.seguros.edit');
    Route::put('/admin/seguros/{id}', [SeguroController::class, 'update'])->name('admin.seguros.update');
});
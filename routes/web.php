<?php
 
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServicosController;
use Illuminate\Support\Facades\Route;
 
 
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
 
Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/blog', [BlogController::class, 'blog'])->name('site.blog');
Route::get('/servicos',[ServicosController::class, 'servicos'])->name('site.servicos');
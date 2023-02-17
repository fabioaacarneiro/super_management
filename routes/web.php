<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AboutController;

Route::get('/', [MainController::class, 'main'])->name('site.index');
Route::get('/sobre-nos', [AboutController::class, 'about'])->name('site.about');
Route::get('/contato', [ContactController::class, 'contact'])->name('site.contact');
Route::get('/login', fn() => 'Login' )->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clients', fn() => 'Clientes' )->name('app.clients');
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('app.suppliers');
    Route::get('/products', fn() => 'products' )->name('app.products');
});


Route::fallback(fn() =>
    '<h3>A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial</h3>'
);

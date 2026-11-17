<?php

use App\Http\Controllers\KatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('katalog.index');
});

Route::get('/sapa', function () {
    return 'Halo, kelompok 1!';
});

Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');

Route::get('/katalog/{id}', [KatalogController::class, 'show'])
    ->whereNumber('id')
    ->name('katalog.show');

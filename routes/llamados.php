<?php

use App\Http\Controllers\LlamadoController;

Route::post('/llamados/registrar', [LlamadoController::class, 'registrar'])->name('llamados.registrar');

use App\Http\Controllers\TurnoController;

Route::prefix('turnos')->controller(TurnoController::class)->group(function () {
    Route::post('/crear', 'crear')->name('turnos.crear');
    Route::post('/{id}/llamar', 'llamar')->name('turnos.llamar');
    Route::post('/{id}/atender', 'atender')->name('turnos.atender');
    Route::post('/{id}/finalizar', 'finalizar')->name('turnos.finalizar');
});

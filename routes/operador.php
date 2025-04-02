use App\Http\Controllers\OperadorController;

Route::prefix('operador')->controller(OperadorController::class)->group(function () {
    Route::get('/', 'index')->name('operador.inicio');
});

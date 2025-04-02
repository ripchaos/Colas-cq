use App\Http\Controllers\PantallaController;

Route::get('/pantalla', [PantallaController::class, 'index'])->name('pantalla.index');

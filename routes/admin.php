use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function () {
    Route::get('/', 'dashboard')->name('admin.dashboard');
    Route::get('/usuarios', 'usuarios')->name('admin.usuarios');
    Route::get('/departamentos', 'departamentos')->name('admin.departamentos');
    Route::get('/configuracion', 'configuracion')->name('admin.configuracion');
    Route::get('/impresoras', 'impresoras')->name('admin.impresoras');
});
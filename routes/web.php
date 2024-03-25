<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudesController;
use  App\Http\Controllers\ServiciosController;
use  App\Http\Controllers\GithubController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('phpmyinfo', function(){
    phpinfo();
})->name('phpinfo');


Route::get('/servicios/servicio', [ServiciosController::class, 'index'])->name('Servicios');
Route::get('/servicios/editar/{servicio}', [ServiciosController::class, 'edit'])->name('EditS');
Route::get('/servicios/ver/{servicio}', [ServiciosController::class, 'show'])->name('ShowS');
Route::get('/crear-servicio', [ServiciosController::class, 'create'])->name('CreateS');
Route::post('/crear-servicio', [ServiciosController::class, 'store'])->name('storeServicio'); 
Route::put('/servicios/{id}', [ServiciosController::class, 'update'])->name('updateServicio');
Route::delete('/servicios/servicios/{id}', [ServiciosController::class, 'destroy'])->name('eliminarServicio');


Route::get('/solicitudes/Solicitudes', [SolicitudesController::class, 'index'])->name('Solicitudes');
Route::get('/solicitudes/editar/{id}', [SolicitudesController::class, 'edit'])->name('EditSo');
Route::get('/solicitudes/ver/{solicitud}', [SolicitudesController::class, 'show'])->name('ShowSo');
Route::get('/crear-solicitud', [SolicitudesController::class, 'create'])->name('CreateSo');
Route::post('/almacenar-solicitud', [SolicitudesController::class, 'store'])->name('storeSolicitud');
Route::put('/solicitud/{id}', [SolicitudesController::class, 'update'])->name('updateSolicitud');
Route::delete('/solicitudes/solicitudes/{id}', [SolicitudesController::class, 'destroy'])->name('eliminarSolicitud');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(GithubController::class)->group(function(){
    Route::get('auth/github', 'redirectToGithub')->name('auth.github');
    Route::get('auth/github/callback', 'handleGithubCallback');
});
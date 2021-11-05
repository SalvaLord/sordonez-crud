<?php

use Illuminate\Support\Facades\Route;
//Inicio de uso de recursos de app
use App\Http\Controllers\EmpleadoController;

//Fin de uso de recursos de app

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });

// Con esto se accede al método de una clase controller para devolver una vista
// Route::get('/empleado/create',[EmpleadoController::class,'create']);


//Esto toma toda la lista de métodos de la clase controller 
Route::resource('empleado', EmpleadoController::class);





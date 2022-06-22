<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', static fn() => view('welcome'));

// Esta ruta no estará disponible en producción
Route::get('phpinfo', static fn() => phpinfo())->middleware('not-in-prod');

Route::prefix('file-upload')->group(static function () {
    Route::get('', static fn() => view('file_upload'));
    Route::post('', static function(Request $request){
        if (!$request->file('fileUpload')?->store("")){
            abort(500, "Ocurrió un error subiendo el archivo");
        }

        echo "Archivo subido correctamente";
    });
});

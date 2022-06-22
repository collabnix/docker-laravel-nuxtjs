<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', static fn() => new JsonResponse([
    'working' => "OK",
    'app_name' => config('app.name'),
    'timezone' => config('app.timezone'),
    'lang' => config('app.locale'),
    'env' => config('app.env'),
    'debug' => config('app.debug'),
], 200));

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



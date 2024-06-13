<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\PolylineController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// create point
Route::get('/points', [PointController::class, 'index'])->name('api.points');
Route::get('/point/{id}', [PointController::class, 'show'])->name('api.point');

// create polyline
Route::get('/polylines', [PolylineController::class, 'index'])->name('api.polylines');
Route::get('/polyline/{id}', [PolylineController::class, 'show'])->name('api.polyline');

// create polygon
Route::get('/polygons', [PolygonController::class, 'index'])->name('api.polygons');
Route::get('/polygon/{id}', [PolygonController::class, 'show'])->name('api.polygon');
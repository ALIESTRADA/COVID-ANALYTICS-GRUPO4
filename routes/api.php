<?php



use App\Http\Controllers\AnalyticsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/regions', [AnalyticsController::class, 'regiones']);


Route::get('/entries', [AnalyticsController::class, 'entradas']);


Route::get('/countries', [AnalyticsController::class, 'paises']);



Route::get('/entries/porfecha/{fecha}', [AnalyticsController::class, 'consulta']);
Route::get('/entries/porfecha/{fecha}/porcountries/{countries}',  [AnalyticsController::class, 'consulta2']);
Route::get('/entries/suma/porfecha/{fecha}',  [AnalyticsController::class, 'consulta3']);
Route::get('/entries/suma/porfecha/{fecha}/porcountries/{pais}',  [AnalyticsController::class, 'consulta4']);

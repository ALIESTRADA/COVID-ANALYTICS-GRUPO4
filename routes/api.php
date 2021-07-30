<?php



use App\Http\Controllers\AnalyticsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::get('/regions', [AnalyticsController::class, 'regiones']);
      

 Route::get('/entries', [AnalyticsController::class, 'entradas']);
       

 Route::get('/countries', [AnalyticsController::class, 'paises']);

       

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/entries/porfecha/{fecha}', [AnalyticsController::class, 'consulta']);
Route::get('/entries/porfecha/{fecha}/porcountries/{countries}',  [AnalyticsController::class, 'consulta2']);
Route::get('/entries/porcasos/{cases}/pormuertes/{deaths}',  [AnalyticsController::class, 'consulta3']); 
Route::get('/entries/porpais/{countriesAndTerritories}',  [AnalyticsController::class, 'consulta4']); 

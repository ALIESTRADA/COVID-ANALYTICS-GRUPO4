<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\Entry;
use App\Models\Region;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function regiones()
    {
        $regions = Region::all();
        return ['regions' => $regions];
    }


    public function entradas()
    {
        $entries = Entry::all();
        return  ['entries' => $entries];
    }


    public function paises()
    {
        $countries = Country::with('entries')->get();
        return  ['countries' => $countries];
    }

    //Paises por fecha

    public function consulta($fecha)
    {
        $formatofecha = str_replace("-", "/", $fecha);

        $pais = Entry::with('country')->where('dateRep', "=", $formatofecha)->get();
        return  ['pais' => $pais];
    }

    //Un país en concreto por día
    public function consulta2($fecha, $countries)
    {
        $formatofecha = str_replace("-", "/", $fecha);

        $ciudades = Country::where('countriesAndTerritories', "=", $countries)->get();
        $paises = Entry::with('country')->where('country_id', "=", $ciudades[0]->id)->where('dateRep', '=', $formatofecha)->get();
        return  ['paises' => $paises];
    }
    // paises con el sumatorio de los datos

    public function consulta3()
    {
        $suma = DB::table('entries')
            ->Join('countries', 'countries.id', '=', 'entries.country_id')
            ->select('entries.country_id', 'countries.countriesAndTerritories', DB::raw('SUM(entries.cases) AS cases'), DB::raw('SUM(entries.deaths) AS deaths'))
            ->groupBy('entries.country_id')
            ->get();
        return  ['suma' => $suma];
    }
    // Un país concreto con el sumatorio de los datos
    public function consulta4($fecha, $countriesAndTerritories)
    {
        $formatofecha = str_replace("-", "/", $fecha);


        $paistotal = DB::table('entries')
            ->Join('countries', 'countries.id', '=', 'entries.country_id')
            ->select('entries.country_id', 'countries.countriesAndTerritories', DB::raw('SUM(entries.cases) AS cases'), DB::raw('SUM(entries.deaths) AS deaths'))
            ->Where('countriesAndTerritories', '=', $countriesAndTerritories)
            ->where('dateRep', '=', $formatofecha)
            ->groupBy('entries.country_id')
            ->get();
        return  ['suma' => $paistotal];
    }
}

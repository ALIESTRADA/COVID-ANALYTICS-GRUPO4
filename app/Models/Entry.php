<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    // Relacion con el Modelo. Se puede poner belongsto('App\Models\Country')

    public function country()
    {

        return $this->belongsTo(Country::class);
    }
}



/*public function index(){
	$articulos = Country::where('fecha', '>', time() - (365*24*3600))->get();
	return view('country.index', [
		'articulos' => $articulos
	]);
}*/
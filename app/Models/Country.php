<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a concetar a este modelo
    protected $table="countries";
    //la calve primaria de la tabla
    protected $primaryKey = "country_id";
    //omitir campos de auditoria
    public $timestamps = false; 
    use HasFactory;

    //relacion M:M entre paises e idiomas
    public function idiomas(){
        //belongsToMany : parametros
        //1 - modelo a relacionar
        //2 - La tabla pidote 
        //3 - FK del modelo actual en el pivote
        //4 - FK del modelo a relacionar el pivote
        return $this->belongsToMany(idioma::Class,
                                    'country_languages',
                                    'country_id',
                                    'language_id'
                                    )->withPivot('official');
    }
}

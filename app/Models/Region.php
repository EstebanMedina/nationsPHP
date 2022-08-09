<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //la tabla a concetar a este modelo
    protected $table="regions";
    //la calve primaria de la tabla
    protected $primaryKey = "region_id";
    //omitir campos de auditoria
    public $timestamps = false; 

    use HasFactory;

    //Relacion entre regiones y contienentes
    public function Continente(){
        //belongsto parametros
        //1.el modelo a relacionar
        //2.La fk del modelo a relacionar en el modelo actual
        return $this->belongsTo(
            Continent::class,
            'continent_id');
    }

    //relacion entre region 1-M paises
    public function paises(){
        return $this->Hasmany(Country::class,
                                     'region_id');
    }
}

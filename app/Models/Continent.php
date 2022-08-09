<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla a concetar a este modelo
protected $table="continents";
//la calve primaria de la tabla
protected $primaryKey = "continent_id";
//omitir campos de auditoria
public $timestamps = false; 

    use HasFactory;

    //Relacion entre continene y region
    public function regiones(){
    //HasMany parametros:
    //1. El modelo a relacionar 
    //2. la FK  del modelo actual en el modelo a relacionar 
        return $this->hasMany(Region::class,
                                'continent_id');
    } 

    //relacion entre continente y sus paises:
    //Abuelo: Continent
    //Papá: Region
    //Nieto: Country
    public function paises(){
        //hasManyThrough parametros
        //1. modelo nieto
        //2. modelo papá
        //3. FK del abuelo en el papá
        //4. FK del papá en el nieto
        return $this->hasManyThrough(Country::Class,
                                    Region::Class,
                                    'continent_id',
                                    'region_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla a concetar a este modelo
    protected $table="languages";
    //la calve primaria de la tabla
    protected $primaryKey = "language_id";
    //omitir campos de auditoria
    public $timestamps = false; 
    use HasFactory;

    //relacion entre idioma y paises
    public function paises(){
        return $this->belongsToMany(country::Class,
                                    'country_languages',
                                    'language_id',
                                    'country_id');
    }
}

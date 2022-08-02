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
}

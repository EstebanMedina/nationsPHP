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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "languages";
    //la calve primaria de la tabla
    protected $primaryKey="language_id";
    //anular campos de auditoria
    public $timestamps = false;

 use HasFactory;

 //Relacion M:M con paises Country
 public function paises(){
     //belongsToMany: parametros
     //1 El modelo a relacionar
     //2. Tabla intermedia
     //3. la fk del modelo actual en en la intermedia
     //4. la clave foranea del modelo a relacionar en la intermedia
     return $this->belongsToMany(Country::class,
     'country_languages',
     'language_id',
     'country_id'  
     )->withPivot('official');
 }
}

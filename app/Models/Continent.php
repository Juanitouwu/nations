<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //la tabla con la cual el modelo se relaciona
    protected $table = "continents";
    //la calve primaria de la tabla
    protected $primaryKey="continent_id";
    //anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relacion entre continente y region
    public function Regiones(){
        return $this->hasMany(Region::class,
                              'Continent_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
  use HasFactory;

    // Especifica el nombre exacto de la tabla
    // protected $table = 'Semestre';
    // Deshabilitar timestamps
    public $timestamps = false;
    // Indicar que la clave primaria es 'id_semestre' y no 'id'
    protected $primaryKey = 'id_semestre';
        // Las fechas que deseas convertir automáticamente a objetos Carbon
    protected $dates = ['fecha_inicio', 'fecha_fin'];
    protected $fillable = [
        'id_semestre',   // Asegúrate de agregar este campo
        'nombre',
        'fecha_inicio',
        'fecha_fin',
        // Agrega cualquier otro campo que desees permitir para la asignación masiva
    ];
    // Mutadores para asegurarse de que las fechas se guardan como instancias de Carbon
}

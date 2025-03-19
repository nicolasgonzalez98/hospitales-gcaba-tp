<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model {
    use HasFactory;

    protected $table = 'hospitales';
    
    protected $fillable = [
        'nombre', 
        'especialidad', 
        'atencion', 
        'direccion', 
        'barrio', 
        'comuna', 
        'telefono', 
        'fax', 
        'sitio_web', 
        'gestion', 
        'geometria'
    ];
}

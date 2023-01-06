<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'cedula',
        'fecha_vencimiento',
        'numero_licencia',
        'foto',
        'correo',
        'direccion',
        'pass',
    ];
}

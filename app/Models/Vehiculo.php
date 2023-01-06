<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'placa',
        'color',
        'tipo',
        'foto_principal',
        'foto_secundara',
        'foto_secundara_2',
        'foto_secundara_3'
    ];
}

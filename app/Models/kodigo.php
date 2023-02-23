<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kodigo extends Model
{
    use HasFactory;
     
    protected $fillable = ['NombreEstudiante', 'BootCamps', 'Empresa', 'FechaInicio', 'FechaFinal', 'CobroFee','MontoCobrar'];
}

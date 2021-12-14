<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombres', 'apellidos','cargo','ci','celular','genero','estado'];
    protected $primaryKey = 'idempleado';

}

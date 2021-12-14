<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;
    protected $fillable = [
    'nombres',
    'apellidos',
    'celular',
    'fecha'
    ];
    protected $primaryKey = 'idproveedor';

}

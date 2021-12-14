<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['nombre', 'cantidad','idempleado','idmarca'];
    protected $primaryKey = 'idproducto';

}

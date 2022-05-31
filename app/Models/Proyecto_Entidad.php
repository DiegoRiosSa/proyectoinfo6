<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto_Entidad extends Model
{
    use HasFactory;

    protected $fillable = ['proyecto_id', 'proveedor_id'];

}

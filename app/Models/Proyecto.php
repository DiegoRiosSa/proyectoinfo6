<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proyecto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['cliente_id', 'proveedor_id', 'nombre', 'fechaInicio', 'subtotal', 'iva', 'total', 'porPagar', 'porRecibir', 'concepto', 'comentariosAdicionales', 'proveedor', 'cliente'];

    public function entidads(){
        return $this->belongsToMany(Entidad::class, 'proyecto_entidad');
    }
}
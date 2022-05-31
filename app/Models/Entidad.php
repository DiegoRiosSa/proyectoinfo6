<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    use HasFactory;

    protected $fillable = ['persona_id', 'razonSocial', 'persona', 'RFC', 'domicilio', 'email', 'telefono'];

    public function proyectos(){
        return $this->belongsToMany(Proyecto::class, 'proyecto_entidad');
    }
}

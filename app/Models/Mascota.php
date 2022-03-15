<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table ='mascotas';
    protected $fillable = [
        'nombre',
        'raza',
        'fecha_nacimiento',
        'imagen',
        'personas_id',
        'descripcion'
    ];

    public function personas()
    {
        return $this->belongsTo(Persona::class);
    }
}

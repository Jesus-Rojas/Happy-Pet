<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'identificacion',
    ];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class,'personas_id');
    }
}

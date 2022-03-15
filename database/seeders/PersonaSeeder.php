<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
  public function run() {
    $nuevo = new Persona();
    $nuevo->identificacion = '1003804256';
    $nuevo->nombre = 'Jesus Rojas';
    $nuevo->save();
  }
}

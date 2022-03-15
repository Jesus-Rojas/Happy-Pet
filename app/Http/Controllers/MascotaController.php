<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index()
    {
        return response()->json(Mascota::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $imagen = $request->file('imagen')->store('public/mascotas');
            $imagen = Storage::url($imagen);
            $Tipo_Butaca = Mascota::create([
                'nombre' => $request['nombre'],
                'estado' => $request['estado'],
                'imagen' => $imagen,
            ]);
            return response()->json([
                'status' => 'OK',
                'message' => 'mascota creada correctamente',
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'ERROR',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

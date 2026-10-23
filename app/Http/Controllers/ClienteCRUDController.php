<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'dpi_cliente' => 'required|string|max:255',
            'edad_cliente' => 'required|integer|min:0',
            'direccion_cliente' => 'required|string|max:255'
        ]);

        $cliente = Cliente::create($datos);

        return response()->json($cliente, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'success' => false,
                'message' => 'Cliente no encontrado'
            ], 404);
        }

        $datos = $request->validate([
            'nombre_cliente' => 'sometimes|required|string|max:255',
            'dpi_cliente' => 'sometimes|required|string|max:255',
            'edad_cliente' => 'sometimes|required|integer|min:0',
            'direccion_cliente' => 'sometimes|required|string|max:255',
        ]);

        $cliente->update($datos);

        return response()->json([
            'success' => true,
            'message' => 'Cliente actualizado correctamente',
            'data' => $cliente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json([
                'success' => false,
                'message' => 'Cliente no encontrado'
            ], 404);
        }

        $cliente->delete();

        return response()->json([
            'success' => true,
            'message' => 'Cliente eliminado correctamente'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Obtener el ID del usuario almacenado en la sesión
    $autor_id = Session::get('user_id');
    
    // Obtener los tickets del usuario desde la base de datos
    $tickets = DB::table('tickets')
                    ->where('autor_id', $autor_id)
                    ->get();
    
    // Pasar los datos de los tickets a la vista
    return view('cliente_inicio', compact('tickets'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente_agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'classification' => 'required|string',
            'detalles' => 'required|string',
        ]);

        // Obtener el departamento almacenado en la sesión
        /* $departamento_id = Session::get('department'); */
        $departamento_id = 1;

        // Obtener el ID del usuario almacenado en la sesión
        $autor_id = Session::get('user_id');


        // Crear una nueva instancia de Ticket y asignar los valores
       

        DB::table('tickets')->insert([
            'autor_id' => $autor_id,
            'departamento_id' => $departamento_id,
            'clasificacion' => $request->classification,
            'detalles' => $request->detalles,
            'estado' => 'asignado'
        ]);


        // Redireccionar a una página de éxito o hacer lo que necesites aquí
        return redirect()->route('inicio_cliente')->with('success', 'Ticket creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

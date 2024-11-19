<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estados = Estado::paginate(10);
        return view('admin.estado.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.estado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_estado' => ['required','string','max:20'],
        ]);

        Estado::create($request->all());

        session()->flash('swal',[

            'icon' => 'success',
            'title' => '! Bien hecho !',
            'text' => 'Datos registrados exitosamente',
    
        ]);

        return redirect()->route('admin.estado.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        return view('admin.estado.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {

        return view('admin.estado.edit', compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estado $estado)
    {
        $request->validate([
            'nombre_estado' => ['required','string','max:20'],
        ]);

        $estado->update($request->all());

        session()->flash('swal',[

            'icon' => 'success',
            'title' => '! Bien hecho !',
            'text' => 'Datos actualizados exitosamente',
        ]);

        return redirect()->route('admin.estado.edit', $estado);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        //
    }
}

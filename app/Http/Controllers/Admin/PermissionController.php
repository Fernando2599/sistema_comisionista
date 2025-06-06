<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:35', 'unique:permissions,name'],
        ]);

        Permission::create($request->all());

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Permiso creado correctamente",
            'icon' => 'success',
        ]);

        return redirect()->route('admin.permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => ['required','string','max:35', 'unique:permissions,name'],
        ]);

        $permission->update($request->all());

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Permiso actualizado correctamente",
            'icon' => 'success',
        ]);
        
        return redirect()->route('admin.permissions.edit', $permission);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Permiso eliminado correctamente",
            'icon' => 'success',
        ]);

        return redirect()->route('admin.permissions.index');
    }
}

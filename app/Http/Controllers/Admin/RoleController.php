<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //recuperar permisos
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:35', 'unique:roles,name'],
            'permissions' => 'nullable|array',
        ]);

        $role = Role::create($request->all());
        // sincronizar
        $role->permissions()->attach($request->permissions);

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Rol creado correctamente",
            'icon' => 'success',
        ]);

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //recuperar permisos
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['required','string','max:35', 'unique:roles,name,' . $role->id],
            'permissions' => 'nullable|array',
        ]);

        $role->update($request->all());

        //sincronisar roles con permisos
        $role->permissions()->sync($request->permissions);

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Rol actualizado correctamente",
            'icon' => 'success',
        ]);
        
        return redirect()->route('admin.roles.edit', $role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        session()->flash('swal',[
            'title' => 'Éxito',
            'text' => "Rol eliminado correctamente",
            'icon' => 'success',
        ]);

        return redirect()->route('admin.roles.index');
    }
}

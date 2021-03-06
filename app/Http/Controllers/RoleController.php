<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();
        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        $id_auth = Auth::user()->id;
        $auth =  User::findOrFail($id_auth);
         DB::table('reportes')->insert([

            'reporte' => $auth->name . " (".$auth->email.")      ha CREADO en el sistema el rol:      ". $request->name. " (". $request->description.")",
            'fecha' => now()

        ]);

        return redirect()->route('roles.index', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $permissions = $role->permissions;

        return view('roles.show', compact('role','permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);

        $permissions = Permission::get();

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions'));

        $id_auth = Auth::user()->id;
        $auth =  User::findOrFail($id_auth);
        DB::table('reportes')->insert([

            'reporte' => $auth->name . " (".$auth->email.")      ha EDITADO en el sistema el rol:      ". $request->name. " (". $request->description.")",
            'fecha' => now()

        ]);

        return redirect()->route('roles.index', $role->id)
            ->with('info', 'Rol "'.$role->name.'" guardado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        
        $id_auth = Auth::user()->id;
        $auth =  User::findOrFail($id_auth);
        DB::table('reportes')->insert([

            'reporte' => $auth->name . " (".$auth->email.")      ha EDITADO en el sistema el rol:      ". $role->name. " (". $role->description.")",
            'fecha' => now()

        ]);
        $role->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

}

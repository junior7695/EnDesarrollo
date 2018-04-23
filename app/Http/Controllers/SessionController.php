<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

	public function index()
    {
        $entidad = Auth::user()->entidad;
        $sessions = DB::table('sessions')->get();

        // Solo los Usuarios de CANTV podran observar todos los usuarios, de lo contrario solo podra observar usuarios de su propia entidad
        if($entidad == 'CANTV'){
            $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('sessions.index', compact('users','sessions'));
        }else{
            $users = User::orderBy('id', 'ASC')->where('entidad',$entidad)->paginate(5);
        return view('sessions.index', compact('users','sessions'));
        }  
    }

    public function endsession($id)
    {
        $user = User::findOrFail($id);
        DB::table('sessions')->where('user_id',$user->id)->delete();
        return back()->with('info', 'Usuario Desloqueado con exito!');
    }

}

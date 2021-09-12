<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\paginate;
use App\User;
use App\Square;

class UserController extends Controller
{

    function login(){       
        return view('login');
    }
    
    function logeado(Request $request){
        // login app
       $validacion = request()->only('email', 'password');

        if(Auth::attempt($validacion)){
            if(Auth::user()->state === "Inactivo"){
                return redirect()->back();
            }else{
                return redirect('appVinosAdmin');
            }
        }else{
            return redirect('login');
        }

    }

    function validado(){
        
        $usuarios = DB::table('users')->paginate(10);

        return view('appVinosAdmin', compact('usuarios'));

    }

    public function registroNuevo(Request $request){

        if(User::where('email', '=', $request->email)->exists()){
            return redirect()->back()->with('error', "¡ El email que ingresaste para el nuevo usuario ya existe ! por favor prueba con otro", 'request');
        }

        $nuevo = new User();

        $nuevo->name = $request->name;
        $nuevo->email = $request->email;
        $nuevo->phone = $request->phone;
        $nuevo->password = bcrypt($request->password);
        $nuevo->rol = $request->rol;
        $nuevo->state = $request->state;

        $nuevo->save();

       return redirect()->back()->with('exito', "¡ El Usuario se ha agregado con éxito !");
    }

    public function editador(Request $request){

        $edita = User::find($request->id);

        $edita->id = $request->id;
        $edita->name = $request->name;
        $edita->email = $request->email;
        $edita->phone = $request->phone;
        $edita->rol = $request->rol;
        $edita->password = bcrypt($request->password);
        $edita->state = $request->state;

        $edita->save();

        return redirect('appVinosAdmin');

    }

    public function estado(Request $request){
        $estado = User::find($request->id);

        $estado->id = $request->id;
        $estado->state = $request->state;

        $estado->save();

        return redirect('appVinosAdmin');
    }
    // Relacion Cuadres de caja
    public function relaciona(Request $request){
        if($request->ajax()){
            $square = Square::latest('id')->first();
            $usuario = User::find($request->id);
            $usuario->Squares()->attach($square);
        }
    }
    public function historialCuadre(Request $request){
        $cuadres = User::find($request->id);
        $datos = $cuadres->Squares;
        return view('ListaCuadreCaja', compact('datos'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        return view('pages/cliente/cliente');
    }

    public function register(Request $request){
        /*dd($request->all());*/

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'email:rfc'],
            'password' => ['required', 'min:6'],
        ]);

        if ($validator->fails()) {
            return response()->json(['title' => 'Datos erróneos', 'text' => 'Rellena los campos correctamente'], 400);
        }

        if($request->nombreTienda !== null){
            $validator = Validator::make($request->all(), [
                'nombreTienda' => 'required',
                'cif' => 'required',
                'location' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['title'=> 'Datos erróneos', 'text' => 'Rellena los campos de la tienda correctamente'], 400);
            }
        }

        // Creamos el usuario

        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->location = $request->location;
        $user->password = bcrypt($request->password);

        if($request->nombreTienda === null || $request->nombreTienda === ''){
            $user->tipo = 'cliente';
        }else{
            $user->tipo = 'tienda';
        }
        if($user->save()){
            //Si se guarda correctamente comprobamos si es una tienda
            if($user->tipo === 'tienda'){
                $tienda = new Tienda();
                $tienda->nombre = $request->nombreTienda;
                $tienda->user_id = $user->id;
                $tienda->cif = $request->cif;
                $tienda->location = $request->location;
                $tienda->estado = 'Abierta';
                if($tienda->save()){
                    Auth::login($user);
                    return response()->json(['url' => '/tienda'], 200);
                }
            }
        }
        Auth::login($user);
        return response()->json(['url' => '/cliente'], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tienda = Tienda::query()->where('user_id', auth()->user()->id)->first();
        $pedidos = Pedido::query()->where('tienda_id', $tienda->id)->with('user')->get();
        return view('pages/tienda/tienda', compact(['tienda', 'pedidos']));
    }
}

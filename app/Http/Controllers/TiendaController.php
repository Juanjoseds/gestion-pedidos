<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Tienda;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public $user;


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tienda = Tienda::query()->where('user_id', $this->user->id)->with('pedidos')->first();
        return view('pages/tienda/tienda', compact(['tienda']));
    }
}

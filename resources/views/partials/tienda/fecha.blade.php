<div class="today row">
    <div class="col">
        <p>Hoy</p>
    </div>
    <div class="col">
        <p class="lastPedido">Último pedido {{Carbon\Carbon::parse($tienda->pedidos[0]->created_at)->diffForHumans()}}</p>
    </div>

</div>

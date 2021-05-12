<div id="content-s1">
    <div class="bg-header">
        <h1>{{$tienda->nombre}}</h1>

        <div class="main-filter row">
            @include('partials/tienda/filtros')
        </div>

        <div class="today row">
            <div class="col">
                <p>Hoy</p>
            </div>
            <div class="col">
                <p class="lastPedido">Último pedido hace 16 min.</p>
            </div>

        </div>
    </div>

    <div id="tarjetas">
        @include('partials/tienda/tarjetas')
    </div>
</div>

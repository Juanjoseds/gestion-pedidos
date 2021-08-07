<div id="content-s1">
    <div class="bg-header">
        <h1>{{$tienda->nombre}}</h1>

        @include('partials/tienda/filtros')
        @include('partials/tienda/fecha')
    </div>

    @include('partials/tienda/tarjetas')
</div>

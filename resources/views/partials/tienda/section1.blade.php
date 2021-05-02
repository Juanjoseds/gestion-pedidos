<div id="content-s1">
    <div class="bg-header">
        <h1>{{$tienda->nombre}}</h1>

        <div class="main-filter row">
            <div class="filter">
                <div class="row">

                    <div class="col-2">
                        <p>Filtros</p>
                    </div>
                    <div class="col-10 filtros-btn">
                        <button type="button" class="btn btn-outline-light">Todos</button>
                        <button type="button" class="btn btn-outline-light">Confirmados <i class="icon-success" data-feather="check"></i></button>
                        <button type="button" class="btn btn-outline-light">Pendientes <i class="icon-pending" data-feather="clock"></i></button>
                        <button type="button" class="btn btn-outline-light">Cancelados <i class="icon-canceled" data-feather="x"></i></button>
                    </div>
                </div>
            </div>
            <div class="filter filter-add">
                <button type="button" class="btn btn-success"><i class="icon-canceled" data-feather="shopping-bag"></i> Nuevo pedido</button>
            </div>
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

        @foreach($pedidos as $pedido)
            <div class="card">

                <div class="content row">

                    <div class="col-1 separador">
                        <p class="hora">{{$pedido->created_at->format('H:i')}}</p>
                        <p class="lastTime">{{\Illuminate\Support\Carbon::now()->diffForHumans($pedido->created_at, true)}}</p>
                    </div>
                    <div class="col-1">
                        <img src="https://www.rogerfederer.com/templates/protostar/img/fed_prof.jpg" alt="RF">
                    </div>
                    <div class="col-2 separador">
                        <p class="nombre">{{$pedido->user->name}}</p>
                        <p>{{$pedido->user->dni}}</p>
                    </div>
                    <div class="col-2 separador">
                        <p class="fecha">{{$pedido->created_at->format('d M')}}</p>

                        <div class="main-estado
                               @if($pedido->estado==='pendiente') estado-pendiente @endif
                               @if($pedido->estado==='cancelado') estado-cancelado @endif
                               @if($pedido->estado==='preparado') estado-preparado @endif
                               @if($pedido->estado==='en proceso') estado-proceso @endif

                            ">
                            {{--<div class="circle"></div>
                            <p class="estado" >{{$pedido->estado}}</p>--}}
                            <li>{{$pedido->estado}}</li>
                        </div>

                    </div>
                    <div class="col-4">
                        <p class="comentario">{{$pedido->comentario}}</p>
                    </div>
                    <div class="col actions">
                        <i data-feather="edit"></i>
                        <i data-feather="trash-2"></i>
                    </div>

                </div>

            </div>
        @endforeach


    </div>
</div>

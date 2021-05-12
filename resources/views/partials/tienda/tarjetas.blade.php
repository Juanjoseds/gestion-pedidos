@foreach($pedidos as $pedido)
    <div class="card">

        <div class="content row">

            <div class="col-1 separador">
                <p class="hora">{{$pedido->created_at->format('H:i')}}</p>
                <p class="lastTime">{{\Illuminate\Support\Carbon::now()->diffForHumans($pedido->created_at, true, true)}}</p>
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
            <div class="col-4 separador">
                @if($pedido->comentarios !== null && $pedido->comentarios !== '')
                    <p class="comentario">{{$pedido->comentarios}}</p>
                @else
                    <p class="comentario">No hay comentarios</p>
                @endif
            </div>
            <div class="col actions">
                <i data-feather="edit"></i>
                <i data-feather="trash-2"></i>
            </div>

        </div>

    </div>
@endforeach

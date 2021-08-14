<div class="row">
    <div style="font-size: 20px; margin: 0.5em 0 1em 0;">
        <span class="badge rounded-pill
        @if($pedido->estado === 'Pendiente') bg-warning text-dark @endif
        @if($pedido->estado === 'En proceso') bg-primary @endif
        @if($pedido->estado === 'Preparado') bg-success @endif
        @if($pedido->estado === 'Cancelado') bg-danger @endif
">{{$pedido->estado}}</span>
    </div>


    <div class="col-12">
        <h4>Comentarios del pedido</h4>
        <p>{{$pedido->comentarios}}</p>
    </div>

    <div class="col-12">
        <h4>Pedido</h4>
        <div class="d-flex" style="color: gray;">
            <i data-feather="info" style="width: 20px;"></i>&nbsp;Marca los elementos que vas a entregarle al cliente
        </div>

        <form id="preparar-pedido-form" data-id="{{$pedido->id}}" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$pedido->id}}">
            <div class="list-group mt-1">

                @foreach(json_decode($pedido->pedido) as $item)
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="pedido[]" value="{{$item}}">
                        {{$item}}
                    </label>
                @endforeach

            </div>

            <h4 class="mt-2">Precio</h4>
            <div class="input-group mb-3">
                <input type="number" name="precio" class="form-control" placeholder="20.15" aria-label="20.15" aria-describedby="basic-addon2" step="any">
                <span class="input-group-text" id="basic-addon2">€</span>
            </div>

            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-success">¡Preparado!</button>
            </div>
        </form>

    </div>



</div>





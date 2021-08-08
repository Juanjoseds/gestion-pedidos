@extends('./layouts/layoutMaster')

@section('title', 'Inicio | ' . $tienda->nombre)

@section('styles')
    <link rel="stylesheet" href="{{asset("/css/pages/tienda/tienda.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap.css")}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

    <div id="cliente">
        @include('partials/tienda/navbar')
        @include('partials/tienda/section1')
    </div>

    {{-- MODALES --}}
    @include('partials/tienda/modal/modalNuevoPedido')
    @include('partials/tienda/modal/modalPedido')
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('/js/scripts/sweetalert2.all.js')}}"></script>

    <script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    <script src="{{asset("/js/pages/tienda.js")}}"></script>
    <script src="{{asset("/js/pages/offcanvas.js")}}"></script>
    <script src="{{asset("/js/pages/navbar-tienda.js")}}"></script>
    <script src="{{asset("/js/bootstrap.js")}}"></script>
@endsection

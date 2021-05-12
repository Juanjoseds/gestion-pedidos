@extends('./layouts/layoutMaster')

@section('title', 'Inicio | ' . $tienda->nombre)

@section('styles')
    <link rel="stylesheet" href="{{asset("/css/pages/tienda/tienda.css")}}">
    <link rel="stylesheet" href="{{asset("/css/pages/tienda/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap.css")}}">
@endsection

@section('content')

    <div id="cliente">
        @include('partials/tienda/navbar')
        @include('partials/tienda/section1')
    </div>

    {{-- MODALES --}}
    @include('partials/tienda/modal/modalNuevoPedido')
@endsection

@section('scripts')
    <script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    <script src="{{asset("/js/pages/tienda.js")}}"></script>
    <script src="{{asset("/js/pages/navbar-tienda.js")}}"></script>
    {{--<script src="{{asset("/js/pages/login.js")}}"></script>--}}
    <script src="{{asset("/js/bootstrap.js")}}"></script>
@endsection

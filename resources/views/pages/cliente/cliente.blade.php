@extends('./layouts/layoutMaster')

@section('title', 'Login')

@section('styles')
    {{--<link rel="stylesheet" href="{{asset("/css/pages/cliente/cliente.css")}}">
    <link rel="stylesheet" href="{{asset("/css/pages/cliente/navbar.css")}}">--}}
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap-grid.css")}}">
@endsection

@section('content')

    {{--<div id="cliente">
        @include('./partials/cliente/navbar')
        @include('./partials/cliente/section1')
    </div>--}}


@endsection

@section('scripts')
    {{--<script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    <script src="{{asset("/js/pages/navbar-tienda.js")}}"></script>--}}
@endsection

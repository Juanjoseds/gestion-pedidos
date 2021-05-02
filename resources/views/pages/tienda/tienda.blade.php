@extends('./layouts/layoutMaster')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{asset("/css/pages/tienda/tienda.css")}}">
    <link rel="stylesheet" href="{{asset("/css/pages/tienda/navbar.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap-grid.css")}}">
@endsection

@section('content')

    <div id="cliente">
        @include('./partials/tienda/navbar')
        @include('./partials/tienda/section1')
    </div>


@endsection

@section('scripts')
    <script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    <script src="{{asset("/js/pages/navbar-tienda.js")}}"></script>
    {{--<script src="{{asset("/js/pages/login.js")}}"></script>--}}
    {{--<script src="{{asset("/js/bootstrap.js")}}"></script>--}}
@endsection

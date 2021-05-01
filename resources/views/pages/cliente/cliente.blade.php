@extends('./layouts/layoutMaster')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{asset("/css/pages/cliente/cliente.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("/vendors/css/bootstrap-grid.css")}}">
@endsection

@section('content')

    @include('./partials/cliente/section1')

@endsection

@section('scripts')
    <script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    {{--<script src="{{asset("/js/pages/login.js")}}"></script>--}}
    {{--<script src="{{asset("/js/bootstrap.js")}}"></script>--}}
@endsection

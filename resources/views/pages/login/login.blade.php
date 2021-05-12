@extends('./layouts/layoutMaster')

@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{asset("/css/pages/login/login.css")}}">
@endsection

@section('content')

    @include('./partials/login/section1')

@endsection

@section('scripts')
    <script src="{{asset("/js/scripts/jquery.min.js")}}"></script>
    <script src="{{asset("/js/pages/login.js")}}"></script>
    <script src="{{asset("/js/scripts/sweetalert2.all.js")}}"></script>
    {{--<script src="{{asset("/js/bootstrap.js")}}"></script>--}}
@endsection

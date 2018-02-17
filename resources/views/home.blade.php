@extends('layouts.app')
@section('content')
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--}}
    <div id="app">
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2" style="margin-top: 50vh">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Dashboard</div>--}}

                    {{--<div class="panel-body" id="app">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <router-view></router-view>
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
{{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
@endsection

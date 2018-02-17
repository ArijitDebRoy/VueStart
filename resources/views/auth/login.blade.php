@extends('layouts.log')

@section('content')
    @guest
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8" id="log_img" style="display:block">
                <img src="{{url('img/Page_1.png')}}" style="width:65vw; height:85vh; margin-top:4vh">
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="panel panel-default" style="margin-top: 4vh; ">
                    <div class="panel-heading" style="color:white;font-size:20px;background:#399cf9"><b>Login</b></div>

                    <div class="panel-body" style="margin-top:6vh; height:66vh; ">


                        <p style="color:#399cf9;font-size:4vmin;margin-bottom:10vh">Hi, Admin</p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <!--                        <div class="form-group">-->
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom:5vh">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input id="email" type="email" placeholder="Enter User ID" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                            <!--
                                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                            <label for="password" class="col-md-4 control-label">Password</label>
                                -->

                                <div class="col-md-10 col-md-offset-1 ">
                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-bottom:3vh">
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                        <input id="password" type="password" placeholder="Enter Password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group" style="margin-bottom:7vh">
                                    <div class="col-md-6 col-md-offset-3">
                                        <center>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </center>
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <div class="col-md-8 col-md-offset-2">
                                        <center>
                                            <button type="submit" class="btn btn-primary" style="width:80px;background-color:#399cf9">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="padding-left:20px" >
                                                Forgot Your Password?
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div style="margin-top: 9vh">
            <center><img src="{{url('img/alert.png')}}" style="width: 150px;height: 150px"> </center>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <center><p style="font-size: 10vmin">You are allready logged in as {{Auth::user()->name}}</p></center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <center><p style="font-size: 3vmin">Back To <a href="{{ route('home') }}">Admin Panel</a></p></center>
        </div>
    </div>
    <div class="row">
        <center style="font-size: 2vmin">OR</center>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <center><a style="font-size: 3vmin" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b style="color: black">Logout from</b> AICTC</a></center>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
        </div>
        <div style="margin-top: 23vh">

        </div>

    @endguest
@endsection

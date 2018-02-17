<nav class="navbar navbar-default navbar-fixed-top" style="padding: 2vh;">
    <div class="container" >
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style=" margin-bottom:3vh">--}}
        {{--<span class="sr-only">Toggle Navigation</span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--</button>--}}

        <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" >

                <b><p style="color: black;font-size: 30px;margin-left: 5vw"> AICTC</p></b>

            </a>
            <a class="navbar-brand" href="{{ url('/') }}">

                <img id="b_logo" src="{{url('img/logo.png')}}" alt="logo"  style="margin-top: -3vh;margin-left: 45vw; display: block" >

            </a>
        </div>

        {{--<div class="collapse navbar-collapse" id="myNavbar">--}}
        {{--<!-- Left Side Of Navbar -->--}}

        {{--<!-- Right Side Of Navbar -->--}}
        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--<!-- Authentication Links -->--}}
        {{--@guest--}}
        {{--<li><a href="{{ route('login') }}" style="font-size: 3vmin">Login</a></li>--}}
        {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
        {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
        {{--</a>--}}

        {{--<ul class="dropdown-menu">--}}
        {{--<li>--}}
        {{--<a href="{{ route('logout') }}"--}}
        {{--onclick="event.preventDefault();--}}
        {{--document.getElementById('logout-form').submit();" style="font-size: 5vmin">--}}
        {{--Logout--}}
        {{--</a>--}}

        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
        {{--{{ csrf_field() }}--}}
        {{--</form>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endguest--}}
        {{--</ul>--}}
        {{--</div>--}}
    </div>
</nav>
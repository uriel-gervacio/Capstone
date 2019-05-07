<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>St Julianas Wedding Planner</title>

    <!-- CSS And JavaScript -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
</head>


<body>
<div class="container">
    <div class="sj-nav-bar">
        <div class="logo-row">
            <img src="{{asset('/logo-church-header.png')}}"/>
        </div>
        <nav class="nav">
            @if (Auth::user())
                <span id="navbar-home"><a class="nav-link" href="{{ url('/home') }}">Home</a></span>
                @if(auth()->user()->isAdmin())
                    <span id="navbar-search"><a class="nav-link" href="{{ url('weddings/search') }}">Search Weddings</a></span>
                    <span id="navbar-create"><a class="nav-link" href="{{ url('weddings/create') }}">Create Wedding</a></span>
                    <span id="navbar-music"><a class="nav-link" href="{{ url('music/index') }}">Manage Music</a></span>
                    <span id="navbar-readings"><a class="nav-link" href="{{ url('readings') }}">Manage Readings</a></span>
                @endif
                <span id="navbar-logout" class="authx">
                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </span>
            @else
                <span id="navbar-login" class="authx">
                <a class="nav-link active" href="{{ url('/login') }}"> Login </a>
            </span>
            @endif
        </nav>
    </div>
</div>
<div class="container">
    @include('common.errors')
</div>
@yield('content')
<div class="container">
    <div class="footer">
        <div class="row">
            <div class="col-md-3 offset-9">
                <p>
                    <a href="http://stjuliana.org">Saint Juliana Parish</a><br />
                    7200 N Osceola Ave<br />
                    Chicago IL 60631<br />
                    773.631.4127<br />
                    <a href="http://stjuliana.org/reaching-us">Email</a><br />
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
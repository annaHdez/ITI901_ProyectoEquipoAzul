@extends('layout.header.header')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 22.5vh; width: 100%; opacity: 1;">
                <ul class="navbar-nav mr-auto">
                    <a href="index.html" class="btn text-white nav-item table table-dark">
                        <h2><strong>MpShoes</strong></h2>
                    </a>
                </ul>
                <ul class="navbar-nav mr-auto" style="margin-left: -16%;">
                    <img src="{{asset('images/imagen1.png')}}" alt="" style="width: 9rem; height: 9em;">
                </ul>
    
                <ul>
                    <div class="container" style="text-align:center;padding:1em 0;font-size: 0.5em;">
                        <div class="d-line">
                            <h4>
                                <p class style="text-decoration:none;" href="">
                                    <span style="color:gray;">Hora actual en</span>
                                    <br />
                                <p class="text-light">León de los Aldama, México</p>
                                </p>
                            </h4>
                        </div>
                        <div class="d-inline">
                            <iframe class="d-inline"
                                src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FMexico_City"
                                width="100%" height="90" frameborder="0" seamless></iframe> </div>
                    </div>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <a href="{{URL::to('Login')}}" type="button" class="btn btn-outline-success my-2 my-sm-0 text-success"
                        type="submit" style="margin-left: 15px">Ingresar</a>
                </form>
            </nav>
        </div>
    </body>
</html>

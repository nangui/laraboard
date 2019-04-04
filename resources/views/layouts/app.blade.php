<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-light">
    <div id="app">
        <nav class="bg-white">
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-2">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="39" viewBox="0 0 140 39">
                            <g id="Groupe_3" data-name="Groupe 3" transform="translate(-280 -230)">
                              <g id="Groupe_2" data-name="Groupe 2" transform="translate(271 226)">
                                <path id="Tracé_2" data-name="Tracé 2" d="M12.454,37,9,39.784l6.6.852L12.3,43,26,40.636" fill="none" fill-rule="evenodd"/>
                                <path id="Tracé_3" data-name="Tracé 3" d="M42.273,4C27.487,4,15.326,15.078,14.037,29.157A87.371,87.371,0,0,1,23.26,18.8a.738.738,0,0,1,1.029-.01.7.7,0,0,1,.01,1q-1.359,1.351-2.688,2.732l-.175.184C16.793,27.552,13.474,31.767,11.064,37a.7.7,0,0,0,.365.937.74.74,0,0,0,.963-.356,38.585,38.585,0,0,1,2.974-5.273A28.438,28.438,0,0,0,39.618,17.794a.7.7,0,0,0-.016-.7.737.737,0,0,0-.625-.344H36.283l4.83-2.689a.714.714,0,0,0,.328-.384A26.88,26.88,0,0,0,43,4.708.718.718,0,0,0,42.273,4Z" fill="#47d5fa" fill-rule="evenodd"/>
                              </g>
                              <text id="Laraboard" transform="translate(320 261)" fill="#551a8b" stroke="#551a8b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" font-size="22" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Laraboard</tspan></text>
                            </g>
                        </svg>
                    </a>

                    <div>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container mx-auto py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

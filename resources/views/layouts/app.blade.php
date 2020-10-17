<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ChiComms') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background: rgb(159, 25, 50) !important;">
            <div class="container">
            <div class="col-lg-2">
                <div class="row">
                     <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff; font-size: 28px;">ChiComms</a>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}" style="color: #fff;">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="color: #fff;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                <li style="margin-top: 9px;"><a href="" style="color: #fff;text-decoration:none">Post ads</a></li>
                            </ul>
                        </div> 
                        </div>
                    </div>

                    <div class="col-lg-10">
                    <div class="row">
                            <div class="col-lg-4">
                                <form action="" class="form-horizontal" method="post">
                                    <div class="form-group row">
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="searchonproduct" placeholder="Enter Product" style="margin-top: 5px;">
                                        </div>
                                        <div class="col-4">
                                            <input type="submit" class="btn btn-default" name="" value="Search" style="margin-top: 5px;">
                                        </div>
                                    </div>
                                </form>
                            </div> 
                            <div class="col-lg-8">
                            <form action="" class="form-horizontal" method="post">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <input type="text" name="states" id="state" class="form-control" placeholder="Enter State" style="margin-top: 5px;">
                                    </div>
                                    <div class="col-lg-4">
                                        <select name="categories" id="categories" class="form-control dropdown" style="margin-top: 5px;">
                                            <option value="">Select</option>
                                        </select>
                                    </div>
                                        <div class="col-lg-2">
                                            <input type="submit" name="searchads" class="btn btn-default" value="Search" style="margin-top: 5px;">
                                        
                                    </div>
                                </div>
                            </form>
                            </div>   
                    </div>
                    </div>
                        
                    <!--
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>-->

                
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

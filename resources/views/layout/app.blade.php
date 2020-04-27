<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <title>Nova | @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/master.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/chartsjs/Chart.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/flagiconcss3/css/flag-icon.min.css')}} " rel="stylesheet">
</head>
    
<body>

    
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="{{ asset('img/bootstraper-logo.png')}} " alt="" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                
                <li>
                    <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-calendar-alt"></i>Reserva <i class="fas fa-chevron-down float-right mt-1"></i></a>
                    <ul class="collapse list-unstyled" id="uielementsmenu">
                        <li>
                            <a href="{{ route('reserva.create') }}"> Nueva reserva</a>
                        </li>
                        @if (isset(Auth::user()->name))
                        @if(Auth::user()->tipo_usuario == "administrador")
                        <li>
                            <a href="{{ route('reserva.index') }}">Consultar reservas</a>
                        </li>
                        @endif
                        @endif
                    </ul>
                </li>
                @if (isset(Auth::user()->name))
                        @if(Auth::user()->tipo_usuario == "administrador")
                <li>
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-friends"></i>Usuarios<i class="fas fa-chevron-down float-right mt-1"></i></a>
                    <ul class="collapse list-unstyled" id="users">
                    
                        <li>
                            <a href="{{ route('user.create') }}">Crear usuarios</a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}">Consultar usuarios</a>
                        </li>
                        
                    </ul>
                </li>
                    @endif
                @endif
                @if (isset(Auth::user()->name))
                        @if(Auth::user()->tipo_usuario == "administrador")
                <li>
                    <a href="{{ route('saldo.index') }}"><i class="fas fa-cash-register"></i> Recargar saldo</a>
                </li>
                
                @endif
                @endif
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">

                     <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                            
                            @if (isset(Auth::user()->name))
                            <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>{{ Auth::user()->name }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li>
                                        
                                        <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                        
                                        <i class="fas fa-sign-out-alt"></i> 
                                        
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            
                            @endif
                            
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            
            <div class="container">
            
            @yield('content')
                
                
            </div>

        </div>
    </div>
    
    
    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('vendor/fontawesome5/js/solid.min.js')}}"></script>
    <script src="{{asset('vendor/fontawesome5/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('vendor/airdatepicker/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('vendor/airdatepicker/dist/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('vendor/mdtimepicker/mdtimepicker.min.js')}}"></script>


</body>
</html>

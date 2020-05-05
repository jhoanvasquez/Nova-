@extends("../layout/app")
@section('title') Perfil @stop
<!-- pick -->

    <link href="{{asset('vendor/airdatepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/mdtimepicker/mdtimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/autocomplete.css')}}" rel="stylesheet" />
    <link href="{{asset('css/master.css')}}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    

@section('content')
    
<div class="row">
<div class="col-lg-12">
    <div class="card mt-1">
        <div class="card-header h3">Perfil</div>
            <div class="card-body">

                    <div class="container col-md-8 col-lg-8">
                        <div class="card">
                        
                            <img class="card-img-top mx-auto d-block" src="{{ asset('img/users.png')}}" alt="image" style="width:50%">
                            <div class="card-header">Nombre</div>
                            <div class="card-body">{{$user->name}}</div>
                            <div class="card-header">Apellido</div>
                            <div class="card-body">{{$user->apellido}}</div>
                            <div class="card-header">Usuario</div>
                            <div class="card-body">{{$user->usuario}}</div> 
                            <div class="card-header">E-mail</div>
                            <div class="card-body">{{$user->email}}</div>
                            <div class="card-header">Saldo</div>
                            <div class="card-body">{{$user->saldo}}</div>
                        
                        </div>
                    </div> 
                             
                    
                    <a class="btn btn-primary btn-round float-right mt-3" href="/">Volver al inicio</a>

                    
            </div>
        </div>
    </div>
</div>    

@stop



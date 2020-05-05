@extends("../layout/app")
@section('title') Inventario @stop
<!-- pick -->

    <link href="{{asset('vendor/airdatepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/mdtimepicker/mdtimepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/autocomplete.css')}}" rel="stylesheet" />
    <link href="{{asset('css/master.css')}}" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    

@section('content')
    
<div class="row">
<div class="col-lg-12">
    <div class="card mt-5">
        <div class="card-header h3">Inventario</div>
            <div class="card-body">
                    
                    
            <div class="table-responsive">

                <table id="tableConsulta" class="table">
                    <thead>
                        <tr>
                        <th>Número de reservas</th>
                        <th>Ganancias</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr id="rows">
                        <td>{{$inventario->reservadas}}</td>
                        <td>{{$inventario->ganancias}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-round float-right mt-3" href="/">Volver al inicio</a>
</div>    
        
@stop



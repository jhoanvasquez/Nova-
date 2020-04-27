@extends("../layout/app")
@section('title') Consultar reserva @stop
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h3 class="mt-3">Consultar reserva</h3>
        <div class="content">
                <div class="container-fluid">
                 <div class="row">
                        <div class="col-md-12 col-lg-12 mt-5">
                            <div class="card">
                                <div class="card-header"><h5>Tabla de consulta</h5></div>
                                <div class="card-body">
                                <form action="">
                                @csrf 
                                    <div class="form-group row" >
                                        <input id="dateConsult" name="date" type='date' class='form-control col-md-4 col-lg-4 col-5 ml-3'  placeholder="aaaa-mm-dd" data-date-format="yy/mm/dd">
                                        <input id="consultR" class="btn btn-primary btn-round float-right" type="button" value="Buscar!">                    
                                    </div> 
                                </form>
                                  <div class="table-responsive">
                                    <table id="tableConsulta" class="table">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($reserva as $r)
                                            <tr id="rows">
                                                <td>{{$r->id}}</td>
                                                <td>{{$r->date}}</td>
                                                <td>{{$r->hora}}</td>
                                                <td>{{$r->name}}</td>
                                                <td>{{$r->apellido}}</td>
                                                <td>{{$r->usuario}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                    {!! $reserva->render() !!}
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/reservationConsult.js')}}"></script>                
@stop
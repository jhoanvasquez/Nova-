@extends("../layout/app")
@section('title') Consultar reserva @stop
@section('content')

<link href="{{asset('css/autocomplete.css')}}" rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}">


<h3 class="mt-3 mb-4">Consultar reserva</h3>
        <div class="content">
                <div class="container-fluid">
                 <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header"><h5>Tabla de consulta</h5></div>
                                <div class="card-body">

                                <form action="">
                                  <div class="ml-1 mb-5 row">
                                  @csrf 
                                    <input type="search" name="usuario" id="user"  class="form-control col-md-10 col-lg-10 col-8">
                                    <input id="consult" class="btn btn-primary btn-round float-right " type="button" value="Buscar!">                    
                                  </div>
                                </form>
                                

                                <script>
                                    var usuarios = @json($users);
                                 </script>
                                

                                  <div class="table-responsive">

                                  <table id="tableConsulta" class="table">
                                        <thead>
                                            <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Usuario</th>
                                            <th>Email</th>
                                            <th>Tipo de usuario</th>
                                            <th>Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($usuario as $r)
                                            <tr id="rows">
                                                <td>{{$r->name}}</td>
                                                <td>{{$r->apellido}}</td>
                                                <td>{{$r->usuario}}</td>
                                                <td>{{$r->email}}</td>
                                                <td>{{$r->tipo_usuario}}</td>
                                                <td>{{$r->saldo}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="float-right">
                                    {!! $usuario->render() !!}
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>

<!--script-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/userConsult.js')}}"></script>
@stop
@extends("../layout/app")
@section('title') Inicio @stop

@section('content')
<h3 class="mt-3 mb-4">Inicio</h3>
        <div class="content">
                <div class="container-fluid">
                 <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header"><h5>Tabla de consulta - Reservas hoy</h5></div>
                                <div class="card-body">

                                
                                
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
                                    </table>
                                    <div class="float-right">
                                    
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>
@stop

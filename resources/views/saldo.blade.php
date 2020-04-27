@extends("../layout/app")
@section('title') Crear reserva @stop
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
        <div class="card-header h3">Recargar saldo</div>
            <div class="card-body">
                    
                    
                        <h5 >Nombre de usuario:</h5>

                        <div class="form-group" >
                            <input type="search" name="usuario" id="user" class="form-control col-md-10 col-lg-10">
                        </div> 
                        <h5 >Cantidad a recargar:</h5>
                        <div class="form-group" >
                            <input type="number" name="saldo" id="saldo" class="form-control col-md-10 col-lg-10">
                        </div> 
                        <script>
                        var usuarios = @json($users);
                        
                        </script>
                        
                        
                             
                    
                    <input id="modal" class="btn btn-primary btn-round mt-2 float-right" type="button" value="Enviar" data-toggle="modal" data-target="#exampleModal">                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nova dice:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            La recarga se ha efectuado
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    
            </div>
        </div>
    </div>
</div>    
        
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="{{asset('js/update.js')}}"></script>   
@stop



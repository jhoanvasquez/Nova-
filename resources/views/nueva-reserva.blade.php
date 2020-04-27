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
        <div class="card-header h3">Nueva Reserva</div>
            <div class="card-body">
                    
                    <form action="{{route('reserva.store')}}" method="POST">
                    @csrf 
                        <h5 >Nombre de usuario:</h5>

                        <div class="form-group" >
                            <input type="search" name="usuario" id="user" class="form-control col-md-10 col-lg-10">
                        </div> 
                        <script>
                        var usuarios = @json($users);
                        
                        </script>
                            <h5 for="fecha">Fecha:</label>
                            
                            <div class="form-group">
                                <form id="fecha">
                                <input id="date" name="date" type='' class='form-control col-md-10 col-lg-10' data-language='en' placeholder="aaaa-mm-dd" data-date-format="yyyy-mm-dd">
                                </form>
                            
                                
                            </div>
                            <div class="form-group">
                            <h5 for="fecha">Disponibilidad:</label>
                            <table id ="table" class="table mt-2 col-md-10 col-lg-10 border-0">
                                    <thead>
                                    <tr>
                                        <th>Hora:</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr id='r0' >
                                        <td class="h5">Selecciona una fecha</td>
                                    </tr>
                                    </tbody>
                                </table>
                                
                             </div>
                        
                             
                    
                    <input id="newReserva" class="btn btn-primary btn-round mt-2 float-right" type="submit" value="Reservar">                    
                    </form>
            </div>
        </div>
    </div>
</div>    
        
              
@stop

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>

$(function(){
    
    $("#date").click(function(){
        $('.datepicker').show();
    });

   $('#date').datepicker({
    onSelect: function(dateStr) {
        $.ajax({
          url: "/reserva/busqueda",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            fecha: $("#date").val()
          },
          success:function(response){
            $('.datepicker').hide();
            borrarTr();
            manejoTabla(response);
            
          },

        });

        function manejoTabla(response){
            var horaReserva = 6;
            var limiteReserva = 5;
            var nuevaFila="";
            var arrayHora =[]
            

            function bool(array, num, ctrl) {
            $.each(array, function(i, array) {
                if(array.hora[1]==num){
                ctrl+=1;   
                }
                
            });
            return ctrl;
            }
            

            for (i = 0; i < horaReserva ; i++) {
                

                if(bool(response, (i+horaReserva), 0)>0){
                        nuevaFila +="<tr id=r"+i+" class='table-success'><td class='h5'>"+ (i + horaReserva) +":00 PM</td>"+"<td class='h5'>Ocupado</td>"+"<td class='pb-4'><input type='checkbox'  class='form-check-input' checked disabled></td>"+"</tr>";
                    }

                else{
                    nuevaFila +="<tr id=r"+i+"><td class='h5'>"+ (i+horaReserva )+":00 PM</td>"+"<td class='h5'>Disponible</td>"+"<td class='pb-4'><input type='checkbox' name='hora' class='form-check-input' value='"+ (i+horaReserva )+":00'></td>"+"</tr>";
                }
            }

            
            $(table).append(nuevaFila);
            
        }
        
        function borrarTr(){
            for(i = 0; i < 6 ; i++){
                $("#r"+i).remove();
            }
        }

        
    }

   
   });
});
</script>



/*------------------------------------------------------------------
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){


    
  $('#consultR').on('click', function () {
    $.ajax({
      url: "/reserva/busquedaReserva",
      type:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
        "_token": $("meta[name='csrf-token']").attr("content"),
        fecha: $("#dateConsult").val()
      },
      success:function(response){
        nuevaFila = "";
        //console.log(response);
        borrarTr();
        if(response.length>0){
        manejoResponse(response);
        }
        else{
          nuevaFila="<tr id=rows><td>No hay reservas</td></tr>";
          $("#tableConsulta").append(nuevaFila);
        }
       },
      error: function (error) {
        console.log(error);
      }

    });

  });

  function borrarTr(){
    for(i = 0; i < 15 ; i++){
        $("#rows").remove();
    }
  }

  function manejoResponse(array){
    
    $.each(array, function(i, array) {
     
      nuevaFila +="<tr id=rows><td>"+array.id+"</td><td>"+array.date+"</td><td>"+array.hora+"</td><td>"+array.name+"</td><td>"+array.apellido+"</td><td>"+array.usuario+"</td>"+"</tr>";
      
    });
    $("#tableConsulta").append(nuevaFila);
    }
  
       




});
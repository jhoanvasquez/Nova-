/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click
$(function(){
    
  $(document).ready(function () {
    $.ajax({
      url: "/reserva/today",
      type:"get",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
        "_token": $("meta[name='csrf-token']").attr("content"),
        
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
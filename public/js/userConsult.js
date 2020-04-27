/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){
    
  $('#consult').on('click', function () {
    $.ajax({
      url: "/user/busquedaUsuario",
      type:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
        "_token": $("meta[name='csrf-token']").attr("content"),
        usuario: $("#user").val()
      },
      success:function(response){
        borrarTr();
        nuevaFila ="<tr id=rows><td>"+response[0].name+"</td><td>"+response[0].apellido+"</td><td>"+response[0].usuario+"</td><td>"+response[0].email+"</td><td>"+response[0].tipo_usuario+"</td><td>"+response[0].saldo+"</td>"+"</tr>";
        $("#tableConsulta").append(nuevaFila);
        
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
});
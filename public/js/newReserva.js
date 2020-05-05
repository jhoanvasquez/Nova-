/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){
    
  $('#newReserva').on('click', function () {
    var serial = $("form").serialize().split("&");
    var hour = "";

    if(serial[4] != null){
       hour = serial[4].split("=")[1];
       //console.log("hola");
    }

    $.ajax({
      url: "/reserva/guardar",
      type:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{

        "_token": $("meta[name='csrf-token']").attr("content"),
        usuario: $("#user").val(),
        date :   $("#date").val(),
        hora :  hour,
        
      },
      success:function(response){
        
        //Actualizacion de la tabla
        var id = parseInt(response[1].substring(0, 2)) - 6;
        $("#r"+id).addClass('table-success');
        $($("#r"+id).children('td')[1]).text("Ocupado");
        $($($("#r"+id).children('td')[2]).children('input')[0]).attr('disabled', 'disabled');
        console.log(response[0]);

      },
      error: function (errors) {
        $("#error").html('');
        var error = "<ul>";
        
        $.each(errors.responseJSON.errors, function (i) {
          error += "<li>"+ errors.responseJSON.errors[i] + "</li>";
      });
        error += "</ul>"
        $("#error").addClass('alert alert-danger');
        $("#error").append(error);
        alert("Por favor verifique, e intentelo de nuevo");
        error="";
      }

    });

  });

 
});

/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){
    
   $('#modal').on('click', function () {
     
     $.ajax({
       url: "/user/guardar",
       type:"POST",
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
       data:{
         "_token": $("meta[name='csrf-token']").attr("content"),
        name: $("#name").val(),
        apellido :   $("#apellido").val(),
        usuario: $("#usuario").val(),
        tipo_usuario :  $("#tipo_usuario").val(),
        email: $("#email").val(),
        contraseña :   $("#contraseña").val(),
        saldo: $("#saldo").val(),
        avatar :   $("#avatar").val(),
         
       },
       success:function(response){
         alert(response);
         
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


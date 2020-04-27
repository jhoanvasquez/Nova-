/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){
    
  $('#newReserva').on('click', function () {
    $.ajax({
      url: "/reserva/store",
      type:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
        "_token": $("meta[name='csrf-token']").attr("content"),
        
      },
      success:function(response){
        alert("la reserva ha sido guardada");
        
      },
      error: function (error) {
        console.log(error);
      }

    });

  });

 
});
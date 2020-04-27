/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(function(){
    
  $('#modal').on('click', function () {
    $.ajax({
      route: "saldo.store",
      type:"POST",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data:{
        "_token": $("meta[name='csrf-token']").attr("content"),
        usuario: $("#user").val(),
        saldo:$("#saldo").val()
      },
      success:function(response){
        console.log("ok");
        
      },
      error: function (error) {
        console.log(error);
      }

    });

  });

  
});
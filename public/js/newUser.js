/*------------------------------------------------------------------

-------------------------------------------------------------------*/
// Toggle sidebar on Menu button click


$(document).ready(function(){
  $('#modal').click(function(e){
     
     /*Ajax Request Header setup*/
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  /* Submit form data using ajax*/
     $.ajax({
        route: "user.store",
        method: 'post',
        data: $('#formulario').serialize(),
        success: function(response){
           //------------------------
             console.log("se ha guardado el usuario")
           //--------------------------
        }});
     });
  });


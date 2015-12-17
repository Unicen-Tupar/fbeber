
function mostrar(cual)
  {
      var elElemento=document.getElementById(cual);
      if(elElemento.style.display == 'block')
      {
        elElemento.style.display = 'none';
      }
    else
      {
        elElemento.style.display = 'block';
      }
  };


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})


      $(".botonAgregarImagenes").on("click", function(event){
        event.preventDefault();

        var archivos = $("#imagesToUpload").prop('files');

        if(typeof(archivos) == 'undefined'){
          mostrarMensaje("No pusiste imagenes");
          return;
        }

        var datos = new FormData();

        $.each(archivos, function(key,value){
          datos.append(key,value);
        });

        $.ajax({
          type: "POST",
          dataType: "json",
          url: event.target.href,
          data: datos,
          success: function(data){
            alert(data.result);
          },
          error: function(){
            alert("No anduvo la llamada AJAX");
          },
          contentType : false,
          processData : false
        });

      });
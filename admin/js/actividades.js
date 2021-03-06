//FUNCIONES DE ACTIVIDAD
function setHandlersActividades(){
  $('#add_actividad').submit(function(){
      event.preventDefault();
      var formData = new FormData(this);
      $.ajax({
       method: "POST",
       url: "index.php?action=agregar_actividad",
       data: formData,
       contentType: false,
       cache: false,
       processData:false,
        success: function(data){
          loadRender("index.php?action=actividades_admin");
          $('#addForm').trigger("reset");     alert("llega?");

      }
     });
   });
 }

//CONSULTAS ESPECIFICAS POR CADA ACTIVIDAD
//carga todos los comentarios de una actividad específica
function cargaComentarios(id_actividad){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=comentariosact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#comentarios').html(data);
    }
  });
}
//muestra los profesores por una actividad especifica
function profeActividades(id_profe){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=profeactividades&id_profe="+id_profe,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoProfeActividades').html(data);
    }
  });
}
//muestra las imagenes de una actividad especifica
function imagesAct(id_actividad){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=imagesact&id_act="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#imagesActividad').html(data);
    }
  });
}
//********************************************************
function borraImagen(id_img){//casi
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_imagen&id_img="+id_img,
    contentType:'html',
    cache: false,
    success: function(data){
       //$('#imagesActividad').html(data);
    }
  });
}
//********************************************************
//BAJA ACTIVIDAD
//carga informacion por una actividad especifica + el/los profesores
function infoProfeAct(id_actividad){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=profeact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoProfeAct').html(data);
    }
  });
}
function borraAct(id_act){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_actividad&id_act="+id_act,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=actividades_admin");
    }
  });
}

//MODIFICA ACTIVIDAD
function modAct(){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_actividad&id_act=" + $("#id_act").val() + "&upd_nombre_a=" + $("#upd_nombre_a").val() + "&upd_descripcion_a=" + $("#upd_descripcion_a").val(),
    contentType:'html',
    cache: false,
    data: $("#modifica_actividad").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=actividades_admin");
    }
  });
}

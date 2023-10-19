
$( "#login" ).submit(function( event ) {
  ver=true

  errores= [];
    var caract = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)
  $("#erroresmsgs").html("")
  if ($("#usu").val()=="" || $("#pass").val()=="" ){
      ver=false
      errores.push("Debe llenar todos los campos")
  } else if (!caract.test($("#usu").val())){
      ver=false
      errores.push("El formato de mail es incorrecto")
  } else {
      
        $.ajax({
          type: "GET",
          url: 'admin/php/read.php',
            async:false,
          dataType: "json",
          data: {id:'verifymail',mail:$("#usu").val()},
          success: function(e){ 
            console.log(e)
            if (e.length==0){
                ver= false
                errores.push("El mail no se encuentra registrado")
            } 
          },	
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
          }
        });

  }
    
  console.log(errores)
  
  if (ver==false){
      event.preventDefault();
      for (var i=0; i<errores.length; i++) {
          $("#erroresmsgs").html($("#erroresmsgs").html()+"<div class='errormsg'>"+errores[i]+"</div><br>")
      }
  }
  
  
});


$( "#susc" ).submit(function( event ) {
  ver=true

  errores= [];
    var caract = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)
  $("#erroresmsgs").html("")
  if ($("#mail").val()=="" ){
      ver=false
      errores.push("Debe llenar el campo con su mail")
  } else if (!caract.test($("#mail").val())){
      ver=false
      errores.push("El mail ingresado no es valido")
  } else {
      
        $.ajax({
          type: "GET",
          url: 'admin/php/read.php',
            async:false,
          dataType: "json",
          data: {id:'verifysusc',mail:$("#mail").val()},
          success: function(e){ 
            console.log(e)
            if (e.length>0){
                ver= false
                errores.push("El mail ya se encuentra registrado")
            } 
          },	
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
          }
        });

  }
    
  console.log(errores)
  
  if (ver==false){
      event.preventDefault();
      for (var i=0; i<errores.length; i++) {
          alert (errores[i])
      }
  }
  
  
});

function buscarp(){
    
    if ($("#buscartext").val()==""){
        alert ("Debe llenar el campo de busqueda")
    } else {
        $("#busquedaf").submit()
    }
}


$( "#formcotpaq" ).submit(function( event ) {
  ver=true
    
  errores= [];
    var caract = new RegExp(/^([0-9])*$/)
  $("#erroresmsgs").html("")
  if ($("#fida").val()=="" || $("#fvuelta").val()==""  || $("#adul").val()==""  || $("#ninos").val()==""  || $("#infa").val()==""){
      ver=false
      errores.push("Debe llenar todos los campos")
  } else if ( !caract.test($("#adul").val()) || !caract.test($("#ninos").val()) || !caract.test($("#infa").val()) ) {
      ver=false
      errores.push("Debe ingresar numero en los campos de adultos, niños, e infantes")
  }
  console.log(errores)
  
  if (ver==false){
      event.preventDefault();
      for (var i=0; i<errores.length; i++) {
          $("#erroresmsgs").html($("#erroresmsgs").html()+"<div class='errormsg'>"+errores[i]+"</div><br>")
      }
  }
});
$( "#suscform" ).submit(function( event ) {
  ver=true
  errores= [];
    var caract = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i)
  $("#erroresmsgs").html("")
  if ($("#nom").val()=="" || $("#ape").val()=="" || $("#mail").val()=="" || $("#tel").val()=="" || $("#dir").val()=="" ){
      ver=false
      errores.push("Debe llenar todos los campos")
  } else if (!caract.test($("#mail").val())){
      ver=false
      errores.push("El formato de mail es incorrecto")
  } else {
      
        $.ajax({
          type: "GET",
          url: 'admin/php/read.php',
            async:false,
          dataType: "json",
          data: {id:'verifymail',mail:$("#mail").val()},
          success: function(e){ 
            console.log(e)
            if (e.length>0){
                ver= false
                errores.push("El mail ingresado, ya cuenta con una membresia activa")
            } 
          },	
          error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
          }
        });

  }
    
  console.log(errores)
  
  if (ver==false){
      event.preventDefault();
      for (var i=0; i<errores.length; i++) {
          $("#erroresmsgs").html($("#erroresmsgs").html()+"<div class='errormsg'>"+errores[i]+"</div><br>")
      }
  }
});
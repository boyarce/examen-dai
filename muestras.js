$(document).ready(function(){
	
	//lama al id de algun boton 

	$("#btn_guarda_muestra").click(function(){
            
		if($("#codigoCliente").val() == ""){
			alert("Debe ingresar el codigo del cliente");
			$("#codigoCliente").focus();
		}else if($("#rutCliente").val()==""){
			alert("Debe ingresar el rut del cliente");
			$("#rutCliente").focus();
		}else if($("#nombreCliente").val()==""){
			alert("Debe ingresar el nombre del cliente");
			$("#nombreCliente").focus();
		}else if($("#fechaRecepcion").val()==""){
			alert("Debe ingresar la fecha de recepcion");
			$("#fechaRecepcion").focus();
		
		}else if($("#temperaturaMuestra").val()==""){
			alert("Debe ingresar la temperatura de la muestra");
			$("#temperaturaMuestra").focus();
		
		}else if($("#cantidadMuestra").val()==""){
			alert("Debe ingresar la cantidad de muestra");
			$("#cantidadMuestra").focus();
			
			
		}else{
			var codigoCliente		= $("#codigoCliente").val();
			var rutCliente =         $("#rutCliente").val();
			var nombreCliente		= $("#nombreCliente").val();
			var fechaRecepcion	= $("#fechaRecepcion").val();
			var temperaturaMuestra	= $("#temperaturaMuestra").val();
			var cantidadMuestra =  $("#cantidadMuestra").val();
		    
			

			//JSON
			var datos = {
				codigoCliente:codigoCliente,
				rutCliente:rutCliente,
				nombreCliente:nombreCliente,
				fechaRecepcion:fechaRecepcion,
				temperaturaMuestra:temperaturaMuestra,
				cantidadMuestra:cantidadMuestra,
				
			};
			//AJAX
			$.ajax({
                method:'POST',
                url:'controller/request.php',
                data:datos,
                success:function(data){
                    alert("Muestra registrada correctamente");
                   
                    $("#formMuestras")[0].reset();
                    $("#respuesta").html(data); //lleva los datos al html para ver las variables
                }
            });

		}

	});

	
         $("#btn_elimina_muestra").click(function(){
            if($("#codigoCliente").val() == ""){
			alert("Debe ingresar el codigo del cliente");
			$("#codigoCliente").focus();
            }else{
                var codigoCliente = $("#codigoCliente").val();
                var datos = {
				codigoCliente:codigoCliente
				
				
			};
                        
               $.ajax({
                method:'POST',
                url:'controller/request.php',
                data:datos,
                success:function(data){
                    alert("Muestra eliminada correctamente");
                   
                    $("#formMuestras")[0].reset();
                 
                    $("#respuesta").html(data);
                }
            });

		
            }
        });
		

	

	

});


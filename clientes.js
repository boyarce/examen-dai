$(document).ready(function(){
	
	//lama al id de algun boton 

	$("#btn_guarda_cliente").click(function(){
            
		if($("#run").val() == ""){
			alert("Debe ingresar el RUT");
			$("#run").focus();
		}else if($("#nombre").val()==""){
			alert("Debe ingresar el nombre");
			$("#nombre").focus();
		}else if($("#pwd").val()==""){
			alert("Debe ingresar la contraseña");
			$("#pwd").focus();
		}else if($("#email").val()==""){
			alert("Debe ingresar el email");
			$("#email").focus();
		
		}else if($("#number").val()==""){
			alert("Debe ingresar el telefono");
			$("#number").focus();
		
		}else{
			var rut 		= $("#run").val();
			var nombre 		= $("#nombre").val();
			var pass 	= $("#pwd").val();
			var email	= $("#email").val();
			
			var telefono 	= $("#number").val();
			

			//JSON
			var datos = {
				rut:rut,
				nombre:nombre,
				pass:pass,
				email:email,
				telefono:telefono,
				
			};
			//AJAX
			$.ajax({
                method:'POST',
                url:'controller/request.php',
                data:datos,
                success:function(data){
                    alert("Cliente registrado correctamente");
                   
                    $("#formCliente")[0].reset();
                    $("#respuesta").html(data); //lleva los datos al html para ver las variables
                }
            });

		}

	});

	
         $("#btn_elimina_usuario").click(function(){
            if($("#rut").val() == ""){
			alert("Debe ingresar el rut");
			$("#rut").focus();
            }else{
                var rut = $("#rut").val();
                var datos = {
				rut:rut
				
				
			};
                        
               $.ajax({
                method:'POST',
                url:'controller/request.php',
                data:datos,
                success:function(data){
                    alert("Cliente eliminado correctamente");
                   
                    $("#formCliente")[0].reset();
                 
                    $("#respuesta").html(data);
                }
            });

		
            }
        });
		

	

	

});


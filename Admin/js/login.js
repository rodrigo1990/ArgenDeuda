function validarUsuario(){

		var email=$("#usuario").val();
		var contrasena=$("#contrasena").val();

			$.ajax({

				data:{email:email,contrasena:contrasena},
				url:'ajax/validarUsuario.php',
				type:'post',
				success:function(response){

					if(response=='TRUE'){
						window.location ="reportes.php?email="+email+"";
					}else{
						alert("Usuario y/o contraseña invalidos");
					}
					},
				error:function(response){
					alert(response);
				}
				});
			
	}
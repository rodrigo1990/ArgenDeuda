function validarUsuario(){

		var email=$("#usuario").val();
		var contrasena=$("#contrasena").val();
		var recordar=$("#recordar:checked").val();


			$.ajax({

				data:{email:email,contrasena:contrasena,recordar:recordar},
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
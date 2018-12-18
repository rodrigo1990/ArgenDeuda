<?php
 session_start();
 if(!isset($_GET['session'])){
 	$_GET['session']=1;
 }
 if($_GET['session']==0){
 	session_destroy();
 }else{
		if(isset($_SESSION['recordarUsuario'])){
		if($_SESSION['recordarUsuario']==true){

			header('Location: reportes.php');

		}else{

		 	session_destroy();

		}
	}else{

		session_destroy();

	}
}
 ?>

<?php include("inc/head.php") ?>
</head>
<body class="bk" >

	<div class="panel-login">
		<div class="panel-header">
			<img src="img/logo.png" alt="" class="" width="200">
			<h4>Panel de administracion</h4>	
		</div>
		<div class="panel-body">

				<input type="text" name="usuario" id="usuario" placeholder="Ingrese un usuario" class="form-control text-center">
				<br>
				<input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" class="form-control text-center">
				<br>
				<div class="checkbox" style="margin-top:0">
				  <label><input type="checkbox" name="recordar" id="recordar" value="1">Recordar usuario y contraseña</label>
				</div>
				<br>
				<a class="center-block btn" onClick="validarUsuario()">Ingresar</a>
		</div>
	</div>



<?php 
include("inc/scripts.php");
 ?>
</body>
</html>
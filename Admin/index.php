<?php
 session_start();
 session_destroy();
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
				<br><br>
				<a class="center-block btn" onClick="validarUsuario()">Ingresar</a>
		</div>
	</div>



<?php 
include("inc/scripts.php");
 ?>
</body>
</html>